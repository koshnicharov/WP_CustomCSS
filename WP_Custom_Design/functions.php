<?php
    
    /*
        CSS Design
    */
    
    function mkCSS(){
        
        wp_enqueue_style('designCSS', get_template_directory_uri() . '/css/design.css', array(), '1.0.0', 'all');
        wp_enqueue_style('designCSS', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
        
    }
    
    add_action('wp_enqueue_scripts', 'mkCSS');
    
    /*
        JavaScript Logic
    */
    
    function mkJS(){
        
        wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '1.0.0', true);
        wp_enqueue_script('designJS', get_template_directory_uri() . '/js/design.js', array(), '1.0.0', true);
        
    }
    
    add_action('wp_enqueue_scripts', 'mkJS');

    /*
        Register Navigation Menu
    */
     
    function mkRegisterMenu() {
        
        register_nav_menu('primary', 'Main Menu');
        
    }
    
    add_action( 'after_setup_theme', 'mkRegisterMenu' );

    /*
        Custom Functions
    */
    
    function mkGetTitle(){

        if(is_page() || is_single() || is_singular()){

            the_title();


        }else{

            if(is_home()){

                bloginfo('name');

            }else{

                wp_title();

            }

        }

    }

    /*
		Sidebar
    */

	add_action( 'widgets_init', 'theme_slug_widgets_init' );
	function theme_slug_widgets_init() {
		register_sidebar(
			array(
				'name' => __( 'Main Sidebar', 'theme-slug' ),
				'id' => 'sidebar-1',
				'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
			)
		);
	}

	/*
		Custom Logo
	*/

	function themename_custom_logo_setup() {
			
		$defaults = array(
			'height'      => 100,
			'width'       => 100,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		);

		add_theme_support( 'custom-logo', $defaults );

	}

	add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

    /*
        Color Picker
    */










    