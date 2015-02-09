<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $site->getPageTitle(); ?></title>

	<?php $site->metaTags(); ?>

	<link rel="shortcut icon" href="<?php $site->img('/favicon.ico', false); ?>">
	<link rel="icon" href="<?php $site->img('/favicon.png', false); ?>" type="image/png">
	<script type="text/javascript">
		var constants = {
			siteUrl: '<?php $site->urlTo("", true) ?>',
			ajaxUrl: '<?php $site->urlTo("/ajax", true) ?>'
		};
	</script>
	<?php $site->includeStyles(); ?>
	<?php $site->includeScript('modernizr'); ?>
	<?php $site->includeScript('respond'); ?>
	<?php $site->includeScriptVars(); ?>
</head>
<body class="<?php $site->bodyClass() ?>">