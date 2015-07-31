<?php
	/**
	 * functions.inc.php
	 * Add extra functions in this file
	 */

	# Basic set-up ------------------------------------------------------------

	# Include styles
	$site->registerStyle('reset', $site->baseUrl('/css/reset.css') );
	$site->registerStyle('sticky-footer', $site->baseUrl('/css/sticky-footer.css') );

	# Plugins
	$site->registerStyle('icheck-skins', '//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.1/skins/flat/flat.css' );
	$site->registerStyle('select2', $site->baseUrl('/css/plugins/select2.css') );
	$site->registerStyle('jquery.datepicker', $site->baseUrl('/css/plugins/jquery.datepicker.css') );

	# Fonts
	$site->registerStyle('google.fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,300,700,800|Oswald:400,700,300' );
	$site->registerStyle('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css' );

	# ChimPlate
	$site->registerStyle('chimplate-base', $site->baseUrl('/css/src/chimplate-base.css') );
	$site->registerStyle('chimplate-grid', $site->baseUrl('/css/src/chimplate-grid.css') );
	$site->registerStyle('chimplate-buttons', $site->baseUrl('/css/src/chimplate-buttons.css') );
	$site->registerStyle('chimplate-forms', $site->baseUrl('/css/src/chimplate-forms.css') );
	$site->registerStyle('chimplate-tables', $site->baseUrl('/css/src/chimplate-tables.css') );
	$site->registerStyle('chimplate-helpers', $site->baseUrl('/css/src/chimplate-helpers.css') );

	$site->registerStyle('chimplate', $site->baseUrl('/css/src/chimplate.less') );

	$site->registerStyle('style', $site->baseUrl('/css/style.css'), array(

		'reset',
		'sticky-footer',
		'boilerplate',

		# Plugins
		'icheck-skins',
		'select2',
		'jquery.datepicker',

		'google.fontd',
		'font-awesome',

		# ChimPlate
		/*'chimplate-base',
		'chimplate-grid',
		'chimplate-buttons',
		'chimplate-forms',
		'chimplate-tables',
		'chimplate-helpers'*/

		'chimplate'
	));
	$site->enqueueStyle('style');

	# Include scripts
	$site->registerScript('rem', $site->baseUrl('/js/rem.min.js'));
	$site->registerScript('icheck', '//cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.1/icheck.js');
	$site->registerScript('select2', $site->baseUrl('/js/select2.min.js'));
	$site->registerScript('jquery.datepicker', $site->baseUrl('/js/jquery.datepicker.js'));

	$site->registerScript('script', $site->baseUrl('/js/script.js'), array(
		'jquery',
		'rem',
		'icheck',
		'select2',
		'jquery.datepicker'
	) );
	$site->enqueueScript('script');

	# Include extra files
	include $site->baseDir('/external/utilities.inc.php');
	include $site->baseDir('/external/ajax.inc.php');

	# Meta tags
	$site->addMeta('UTF-8', '', 'charset');
	$site->addMeta('viewport', 'width=device-width, initial-scale=1');

	$site->addMeta('og:title', $site->getPageTitle(), 'property');
	$site->addMeta('og:site_name', $site->getSiteTitle(), 'property');
	$site->addMeta('og:description', $site->getSiteTitle(), 'property');
	$site->addMeta('og:image', $site->urlTo('/favicon.png'), 'property');
	$site->addMeta('og:type', 'website', 'property');
	$site->addMeta('og:url', $site->urlTo('/'), 'property');

	# Pages
	$site->addPage('grid', 'grid-page');
	$site->addPage('forms', 'forms-page');
	$site->addPage('buttons', 'buttons-page');
	$site->addPage('tables', 'tables-page');
	$site->addPage('helpers', 'helpers-page');

	# Localization
	if ( isset($i18n) ) {
		$i18n->addLocale('en', $site->baseDir('/plugins/i18n/lang/enUS.php'));
		$i18n->addLocale('es', $site->baseDir('/plugins/i18n/lang/esMX.php'));
		$i18n->setLocale('en');
	}

	# Access control
	if ( isset($gatekeeper) ) {
		$gatekeeper->checkLogin();
	}
?>