<?php
/**
 * Main Deployer file.
 *
 * @package    WordPress
 * @subpackage odil-io
 * @author     Odilio Witteveen <witteveen@odil.io>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://odil.io
 * @link       https://github.com/search?l=&p=2&q=upload+path%3A%2F+filename%3Adeploy.php&ref=advsearch&type=Code
 * @since      1.0.0
 */

namespace Deployer;

require 'recipe/common.php';
require 'contrib/telegram.php';

// Deployer Settings.
set( 'application', 'odil-io' );
set( 'repository', 'git@github.com:odil-io/odil-io.git' );
set( 'allow_anonymous_stats', false );
set( 'build_path', './build/' );

host( 'odil-io' )
	->port( 00000 )
	->set( 'hostname', 'odil.io' )
	->set( 'remote_user', 'ssh-deployer' )
	->set( 'branch', 'main' )
	->set( 'deploy_path', '~/projects/{{application}}' )
	->set( 'theme_dir', '~/www/odil.io/public_html/wp-content/themes' );

// Telegram Settings.
set( 'telegram_token', '' );
set( 'telegram_chat_id', '' );
set( 'telegram_title', '' );
set( 'telegram_text', '_{{user}}_ deploying `{{branch}}` to *{{target}}*' );
set( 'telegram_failure_text', 'Deploy to *{{target}}* failed' );

task(
	'build',
	function() {
		run( 'composer install' );
		run( 'npm install' );
		run( 'npm run-script css' );
		run( 'npm run-script js' );
		run( 'rsync --recursive --exclude-from="./.distignore" --delete --delete-excluded "./" "{{build_path}}"' );
		within(
			'{{build_path}}',
			function () {
				run( 'composer install --verbose --prefer-dist --no-progress --no-interaction --no-dev --optimize-autoloader' );
			}
		);
	}
)->local();

task(
	'deploy:update_code',
	function () {
		upload( '{{build_path}}/', '{{release_path}}' );
	}
);

task(
	'deploy:symlink_theme',
	function () {
		run( 'ln -sfn {{deploy_path}}/current {{theme_dir}}/{{application}}' );
	}
);

after(
	'deploy:failed',
	'telegram:notify:failure'
);

task(
	'deploy',
	array(
		'deploy:prepare',
		'deploy:lock',
		'deploy:release',
		'build',
		'deploy:update_code',
		'deploy:shared',
		'deploy:symlink',
		'deploy:symlink_theme',
		'deploy:unlock',
		'cleanup',
		'success',
	)
);
