<!DOCTYPE html>
<html>
<head>
<!-- Page Encoding -->
<meta http-equiv="content-type" content="text/html" charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- /Page Encoding -->
<title><?php mkGetTitle(); ?></title>
<!-- Design & SEO -->
<?php wp_head(); ?>
<!-- /Design & SEO -->
</head>
<body>
<div class="header">
<div class="container">
<div class="column3" id="logo">
	<a href="/"><?php if(function_exists('the_custom_logo') && (get_theme_mod('custom_logo') > 0)){ the_custom_logo(); }else{ ?><img src="<?php echo get_template_directory_uri() . '/default.png'; ?>" alt="Logo"></a><?php } ?>
	<a href="/"><h1><?php echo bloginfo('name'); ?></h1></a>
</div><!-- End .column3 -->
<div class="column7" id="nav">
<?php
    
    if(has_nav_menu('primary')){
    
    $navArgs = array(
        'container' => true,
        'menu_class' => 'right'
    );
    
    	wp_nav_menu($navArgs);
    
    }else{

    	echo '
        <ul class="right"><li>
        <a href="wp-admin">Няма меню</a>
        </li></ul>
        ';

    }
    
?>
</div><!-- End .column7 -->
</div><!-- End .container -->
</div><!-- End .header -->

<div class="content">
<div class="container">
<div class="column6" id="content">