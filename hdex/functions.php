<?php
     function hdex_scripts(){

          // stylesheets
          wp_enqueue_style('main_style', get_stylesheet_uri());
          wp_enqueue_style('bootstrap_file',get_template_directory_uri().'/css/bootstrap.css');
          wp_enqueue_style('font_file',get_template_directory_uri().'/css/font-awesome.min.css');
          wp_enqueue_style('animate_file',get_template_directory_uri().'/css/animate.css');
          wp_enqueue_style('responsive_file',get_template_directory_uri().'/css/responsive.css');
          wp_enqueue_style('colors_file',get_template_directory_uri().'/css/colors.css');
          wp_enqueue_style('ekko_file',get_template_directory_uri().'/css/ekko-lightbox.css');

          // javascripts
          wp_enqueue_script('jquery.min.js', get_template_directory_uri() . '/js/jquery.min.js', array(),'1.1', true);
          wp_enqueue_script('tether.min.js', get_template_directory_uri() . '/js/tether.min.js', array(),'1.1', true);
          wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array(),'1.1', true);
          wp_enqueue_script('parallax.js', get_template_directory_uri() . '/js/parallax.js', array(),'1.1', true);
          wp_enqueue_script('animate.js', get_template_directory_uri() . '/js/animate.js', array(),'1.1', true);
          wp_enqueue_script('ekko-lightbox.js', get_template_directory_uri() . '/js/ekko-lightbox.js', array(),'1.1', true);
          wp_enqueue_script('custom.js', get_template_directory_uri() . '/js/custom.js', array(),'1.1', true);
     }
     // attach with action hook

     add_action("wp_enqueue_scripts","hdex_scripts");
     // function pagetitle(){
     //      add_theme_support('title-tag');	
     // }
     
     // add_action('after_setup_theme','pagetitle');

     function hdex_menus(){
          register_nav_menus(
               array(
                    'primary-menu' => __('Primary Menu'),
                    'footer-menu' => __('Footer Menu')
               )
          );
     }
     add_action("init","hdex_menus");

     function hdex_logo(){
          $defaults = array(
               'height' => 50,
               'width' => 177,
               'flex-height' => true,
               'flex-width' => true,
               'header-text' => array('site-title','site-description'),
          );
          add_theme_support('custom-logo',$defaults);
     }
     add_action("after_setup_theme","hdex_logo");
?>