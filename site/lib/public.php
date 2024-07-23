<?php
function public_profiles() {

	$profiles = array();

	$profiles['github'] = (object) array(
		'title' => 'GitHub profiel van Odilio',
		'href'  => 'https://github.com/odil-io',
		'icon'  => '<svg height="18" aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true"><path fill-rule="evenodd" fill="currentColor" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>',
	);

	$profiles['stackoverflow'] = (object) array(
		'title' => 'Stack Overflow profiel van Odilio',
		'href'  => 'https://stackoverflow.com/users/1835574/odilio-witteveen',
		'icon'  => '<svg aria-hidden="true" height="18" viewBox="0 0 32 37"><path fill="currentColor" class="stack" d="M26 33v-9h4v13H0V24h4v9h22Z"></path><path class="overflow" fill="currentColor" d="m21.5 0-2.7 2 9.9 13.3 2.7-2L21.5 0ZM26 18.4 13.3 7.8l2.1-2.5 12.7 10.6-2.1 2.5ZM9.1 15.2l15 7 1.4-3-15-7-1.4 3Zm14 10.79.68-2.95-16.1-3.35L7 23l16.1 2.99ZM23 30H7v-3h16v3Z"></path></svg>',
		'data'  => (object) array(
			'name'  => 'reputation',
			'value' => 0,
		),
	);

	$profiles['twitter'] = (object) array(
		'title' => 'Twitter profiel van Odilio',
		'href'  => 'https://twitter.com/odi_de_podi',
		'icon'  => '<svg height="18" viewBox="0 0 24 24" aria-hidden="true"><g><path fill="currentColor" d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>',
	);

	$profiles['open-collective'] = (object) array(
		'title' => 'Open Collective profiel van Odilio',
		'href'  => 'https://opencollective.com/odilio-witteveen',
		'icon'  => '<svg height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.1531 6.8877C30.948 9.47379 31.9999 12.614 31.9999 16.0003C31.9999 19.3866 30.948 22.5271 29.1531 25.1129L25.0085 20.9684C25.8225 19.4957 26.2858 17.8019 26.2858 16.0003C26.2858 14.1987 25.8225 12.5052 25.0085 11.0325L29.1531 6.8877Z" class="collective" /><path fill-rule="evenodd" clip-rule="evenodd" d="M25.1126 2.84685L20.9678 6.99138C19.4951 6.17745 17.8016 5.71417 16 5.71417C10.3194 5.71417 5.71418 10.3194 5.71418 16C5.71418 21.6806 10.3194 26.2858 16 26.2858C17.8016 26.2858 19.4951 25.8226 20.9678 25.0086L25.1126 29.1532C22.5265 30.948 19.3863 32 16 32C7.16352 32 0 24.8365 0 16C0 7.16351 7.16352 0 16 0C19.3863 0 22.5265 1.05197 25.1126 2.84685Z" class="open" /></svg>',
	);

	$profiles['linkedin'] = (object) array(
		'title' => 'LinkedIn profiel van Odilio',
		'href'  => 'https://www.linkedin.com/in/odil-io/',
		'icon'  => '<svg height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34"><path d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z" fill="currentColor"></path></svg>',
	);

	$profiles['instagram'] = (object) array(
		'title' => 'Instagram profiel van Odilio',
		'href'  => 'https://www.instagram.com/odi_de_podi/',
		'icon'  => '<svg height="18" viewBox="0 0 32 32"><defs><linearGradient x1="100%" y1="29.6119491%" x2="1.8547063%" y2="61.8039138%" id="gradient"><stop stop-color="#B900B4" offset="0%"></stop><stop stop-color="#F50000" offset="100%"></stop></linearGradient></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-705.000000, -41.000000)" fill="currentcolor"><path d="M720.994984,41.0100952 C725.338921,41.0100952 725.883619,41.0285079 727.589651,41.1063492 C729.292127,41.184 730.454857,41.4544127 731.472254,41.8498413 C732.524063,42.2585397 733.416063,42.8054603 734.305333,43.6946667 C735.19454,44.5839365 735.74146,45.4759365 736.150222,46.527746 C736.545587,47.5451429 736.816,48.707873 736.893651,50.4103492 C736.971492,52.116381 736.989905,52.6610794 736.989905,57.0050794 C736.989905,61.3490159 736.971492,61.8937143 736.893651,63.599746 C736.816,65.3022222 736.545587,66.4649524 736.150222,67.4823492 C735.74146,68.5341587 735.19454,69.4261587 734.305333,70.3154286 C733.416063,71.2046349 732.524063,71.7515556 731.472254,72.1603175 C730.454857,72.5556825 729.292127,72.8260952 727.589651,72.903746 C725.883619,72.9815873 725.338921,73 720.994984,73 C716.650984,73 716.106286,72.9815873 714.400254,72.903746 C712.697778,72.8260952 711.535048,72.5556825 710.517651,72.1603175 C709.465841,71.7515556 708.573841,71.2046349 707.684571,70.3154286 C706.795365,69.4261587 706.248444,68.5341587 705.839746,67.4823492 C705.444317,66.4649524 705.173905,65.3022222 705.096254,63.599746 C705.018413,61.8937143 705,61.3490159 705,57.0050794 C705,52.6610794 705.018413,52.116381 705.096254,50.4103492 C705.173905,48.707873 705.444317,47.5451429 705.839746,46.527746 C706.248444,45.4759365 706.795365,44.5839365 707.684571,43.6946667 C708.573841,42.8054603 709.465841,42.2585397 710.517651,41.8498413 C711.535048,41.4544127 712.697778,41.184 714.400254,41.1063492 C716.106286,41.0285079 716.650984,41.0100952 720.994984,41.0100952 Z M727.458286,43.9853333 C725.771683,43.908381 725.265778,43.8920635 720.994984,43.8920635 C716.724127,43.8920635 716.218222,43.908381 714.531619,43.9853333 C712.972127,44.0564444 712.125206,44.3170159 711.561587,44.5360635 C710.814984,44.8262222 710.282159,45.1728254 709.722476,45.7325714 C709.16273,46.292254 708.816127,46.8250794 708.525968,47.5716825 C708.306921,48.1353016 708.046349,48.9822222 707.975238,50.5417143 C707.898286,52.2283175 707.881968,52.7342222 707.881968,57.0050794 C707.881968,61.275873 707.898286,61.7817778 707.975238,63.468381 C708.046349,65.027873 708.306921,65.8747937 708.525968,66.4384127 C708.816127,67.1850159 709.162794,67.7178413 709.722476,68.2775238 C710.282159,68.8372698 710.814984,69.183873 711.561587,69.4740317 C712.125206,69.6930794 712.972127,69.9536508 714.531619,70.0247619 C716.218032,70.1017143 716.72381,70.1180317 720.994984,70.1180317 C725.266095,70.1180317 725.771937,70.1017143 727.458286,70.0247619 C729.017778,69.9536508 729.864698,69.6930794 730.428317,69.4740317 C731.174921,69.183873 731.707746,68.8372698 732.267429,68.2775238 C732.827175,67.7178413 733.173778,67.1850159 733.463937,66.4384127 C733.682984,65.8747937 733.943556,65.027873 734.014667,63.468381 C734.091619,61.7817778 734.107937,61.275873 734.107937,57.0050794 C734.107937,52.7342222 734.091619,52.2283175 734.014667,50.5417143 C733.943556,48.9822222 733.682984,48.1353016 733.463937,47.5716825 C733.173778,46.8250794 732.827175,46.292254 732.267429,45.7325714 C731.707746,45.1728254 731.174921,44.8262222 730.428317,44.5360635 C729.864698,44.3170159 729.017778,44.0564444 727.458286,43.9853333 Z M720.994984,62.3366984 C723.939556,62.3366984 726.326603,59.9496508 726.326603,57.0050794 C726.326603,54.0604444 723.939556,51.6733968 720.994984,51.6733968 C718.050349,51.6733968 715.663302,54.0604444 715.663302,57.0050794 C715.663302,59.9496508 718.050349,62.3366984 720.994984,62.3366984 Z M720.994984,48.7914286 C725.531238,48.7914286 729.208571,52.4687619 729.208571,57.0050794 C729.208571,61.5413333 725.531238,65.2186667 720.994984,65.2186667 C716.458667,65.2186667 712.781333,61.5413333 712.781333,57.0050794 C712.781333,52.4687619 716.458667,48.7914286 720.994984,48.7914286 Z M731.452508,48.4669206 C731.452508,49.5269841 730.593143,50.3862857 729.533079,50.3862857 C728.473079,50.3862857 727.613714,49.5269841 727.613714,48.4669206 C727.613714,47.4068571 728.473079,46.5474921 729.533079,46.5474921 C730.593143,46.5474921 731.452508,47.4068571 731.452508,48.4669206 Z"></path></g></g></svg>',
	);

	$profiles['youtube'] = (object) array(
		'title' => 'YouTube profiel van Odilio',
		'href'  => 'https://youtube.com/@odi_de_podi',
		'icon'  => '<svg height="18" viewBox="0 0 33 23"><g><path fill="currentColor" d="M32.1639 3.47675C31.7849 2.10563 30.669 1.0252 29.254 0.656979C26.7021 4.62053e-07 16.4214 0 16.4214 0C16.4214 0 6.15179 -4.04296e-07 3.58788 0.668606C2.17293 1.03682 1.05797 2.10659 0.677978 3.47675C1.43046e-06 5.96222 0 11.1434 0 11.1434C0 11.1434 5.36423e-07 16.3247 0.689977 18.8101C1.06896 20.1803 2.18493 21.2617 3.59988 21.6299C6.15179 22.2869 16.4214 22.2869 16.4214 22.2869C16.4214 22.2869 26.6911 22.2869 29.255 21.6183C30.67 21.2501 31.7849 20.1696 32.1649 18.7985C32.8549 16.313 32.8549 11.1318 32.8549 11.1318C32.8549 11.1318 32.8539 5.96222 32.1639 3.47675Z"></path><path d="M13.1328 15.9243L21.6765 11.1433L13.1328 6.3623V15.9243Z" fill="#292929"></path></g></svg>',
	);

	$profiles['twitch'] = (object) array(
		'title' => 'Twitch profiel van Odilio',
		'href'  => 'https://www.twitch.tv/odi_de_podi',
		'icon'  => '<svg height="18px" viewBox="7 7 26 29"><g><polygon points="13 8 8 13 8 31 14 31 14 36 19 31 23 31 32 22 32 8" fill="currentColor"></polygon><polygon class="face" points="26 25 30 21 30 10 14 10 14 25 18 25 18 29 22 25"></polygon><g><path d="M20,14 L22,14 L22,20 L20,20 L20,14 Z M27,14 L27,20 L25,20 L25,14 L27,14 Z" fill="#a970ff"></path></g></g></svg>',
	);

	foreach( $profiles as $name => $profile ) {

		$attributes = array();

		if ( $profile->data ) {

			foreach( $profile->data as $data ){

				$attributes[] = "data-{$data->name}='{$data->value}'";

			}

			$attributes = implode( ' ', $attributes );

		}

		echo "<a class='social {$name}' target='_blank' title='{$profile->title}' href='{$profile->href}'>{$profile->icon}</a>";
	}
}
