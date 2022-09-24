<?php 
    // Add dynmaic title
    function ventress_add_page_title(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'ventress_add_page_title');

    // Add menus
    function ventress_add_menus(){
        $location = array(
            'primary' => 'Primary site menu',
            'category' => 'Category left menu',
        );
        register_nav_menus($location);
    }
    add_action('init', 'ventress_add_menus');

    function ventress_register_style(){
        wp_enqueue_style('ventress-page-style', get_template_directory_uri().'/style.css', array(), '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'ventress_register_style');
?>
