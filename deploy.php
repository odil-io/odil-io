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

set( 'application', 'site' );

set( 'repository', 'git@github.com:pronamic/wedwiki.git' );

set( 'allow_anonymous_stats', false );

inventory( 'hosts.yml' );

set( 'build_path', './build/' );

/**
 * Build.
 *
 * @link https://github.com/woocommerce/woocommerce/blob/48fdb94bf311c977d15cbaa3d8dab66bac01feb7/plugins/woocommerce/.distignore
 * @link https://github.com/woocommerce/woocommerce/blob/48fdb94bf311c977d15cbaa3d8dab66bac01feb7/plugins/woocommerce/bin/build-zip.sh
 */
task(
	'build',
	function() {
		/**
		 * Composer.
		 */
		run( 'composer install' );

		/**
		 * Node.js.
		 */
		run( 'npm install' );

		/**
		 * CSS.
		 */
		run( 'npm run-script css' );

		/**
		 * JavaScript.
		 */
		run( 'npm run-script js' );

		/**
		 * Copy.
		 *
		 * @link https://github.com/woocommerce/woocommerce/blob/48fdb94bf311c977d15cbaa3d8dab66bac01feb7/plugins/woocommerce/bin/build-zip.sh#L20-L21
		 */
		run( 'rsync --recursive --exclude-from="./.distignore" --delete --delete-excluded "./" "{{build_path}}"' );

		/**
		 * Composer.
		 *
		 * @link https://github.com/woocommerce/woocommerce/blob/48fdb94bf311c977d15cbaa3d8dab66bac01feb7/plugins/woocommerce/bin/build-zip.sh
		 * @link https://github.com/deployphp/deployer/blob/cfcb963ead5f993157d20478c8332c0c93908337/recipe/deploy/vendors.php
		 */
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