<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
    <head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta content="width=device-width, user-scalable=yes,initial-scale=1, minimum-scale=0.5" name="viewport" />
		<meta charset="iso-8859-1" />
		
        <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
        
		<meta content="<?php bloginfo('name'); ?>" name="title" />
		<meta content="<?php bloginfo('description'); ?>" name="description" />
		
		<link href="<?php bloginfo('template_url'); ?>/images/meta/icon-apple-touch-ios.png" rel="apple-touch-icon" sizes="57x57" />
        <link href="<?php bloginfo('template_url'); ?>/images/meta/icon-apple-touch-ipad.png" rel="apple-touch-icon" sizes="72x72" />
        <link href="<?php bloginfo('template_url'); ?>/images/meta/icon-apple-touch-retina.png" rel="apple-touch-icon" sizes="114x114" />
        <link href="<?php bloginfo('template_url'); ?>/images/meta/favicon.ico" type="image/x-icon" rel="shortcut icon" />
        <link href="<?php bloginfo('template_url'); ?>/images/meta/favicon.ico" type="image/vnd.microsoft.icon" rel="icon" sizes="16x16 32x32 48x48 64x64" />
        <link href="<?php bloginfo('template_url'); ?>/images/meta/img-src.png" rel="image_src" />
		
		<link href="<?php bloginfo('pingback_url'); ?>" rel="pingback" />
		
		<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
		<link href="<?php bloginfo('template_url'); ?>/css/lib/normalize.css" type="text/css" rel="stylesheet" />
		<link href="<?php bloginfo('template_url'); ?>/css/lib/kc-setup.css" type="text/css" rel="stylesheet" />
		<link href="<?php bloginfo('template_url'); ?>/css/src/style.css" type="text/css" rel="stylesheet" />
		
		<script src="<?php bloginfo('template_url'); ?>/js/lib/kc-setup.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/src/script.js" type="text/javascript" charset="utf-8"></script>
		
		<?php wp_head(); ?>
    </head>
	<body>
		<div id="main">
			<header>
				<div class="main-header-1">
					<h1 class="site-title"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
					<h2 class="site-subtitle"><?php bloginfo('description'); ?></h2>
				</div>
				<hr />
				<div class="main-header-2">
					<?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>
				</div>
			</header>
			<hr />
