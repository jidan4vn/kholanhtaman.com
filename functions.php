<?php 
function my_custom_wc_theme_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-productp-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );

function initTheme(){
    add_filter('use_block_editor_for_post', '__return_false');

    register_nav_menu('header-top',__( 'Menu top' ));
    register_nav_menu('header-main',__( 'Menu chính' ));
    register_nav_menu('header-footer',__( 'Menu footer' ));

    if (function_exists('register_sidebar')){
        register_sidebar(array(
        'name'=> 'Cột bên',
        'id' => 'sidebar',
    ));
    }
}
add_action( 'init', 'initTheme');