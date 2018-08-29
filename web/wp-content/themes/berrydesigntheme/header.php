<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">


	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

    <?php
    add_action( 'wp_enqueue_scripts', function() {
    //Link Styles
    wp_enqueue_style( 'slick-cs', get_template_directory_uri() . '/vendor/slick/slick.css', [], 'GULP_REPLACE_VERSION' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/styles/normalize.min.css');
    wp_enqueue_style( 'slick-nav', get_template_directory_uri() . '/vendor/slick-nav/slicknav.css', [], 'GULP_REPLACE_VERSION' );

    //Link Scripts
    wp_enqueue_script( 'underscore' );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/vendor/slick/slick.min.js', ['jquery'], 'GULP_REPLACE_VERSION' );
    wp_enqueue_script( 'slick-nav-js', get_template_directory_uri() . '/vendor/slick-nav/jquery.slicknav.js', ['jquery'], 'GULP_REPLACE_VERSION' );
    wp_enqueue_script( 'site', get_template_directory_uri() . '/js/scripts.js', ['jquery'], 'GULP_REPLACE_VERSION' );
    //Link Mobile Detect Base Styles
    // include('includes/mobile-detect.php');
    // $detect = new Mobile_Detect;
    // if($detect->isMobile()) {
    //     if($detect->isTablet())
    //          wp_enqueue_style('tablet-styles', $t_root.'/css/tablet.css');
    //     else wp_enqueue_style('phone-styles',  $t_root.'/css/phone.css');
    // }
    });
?>

	<?php wp_head(); ?>
	<script>
    // conditionizr.com
    // configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script>

</head>
<body <?php body_class(); ?>>
	<div id="header">
		<header role="banner">
            <h1 id="logo">Berry Web Design</h1>
			<nav class="nav" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>
		</header>
    </div>
