<?php


define("C_THEME_ROOT", get_template_directory_uri());
define("C_ICONS_DIR", C_THEME_ROOT . "/assets/icons");
define("C_IMG_DIR", C_THEME_ROOT . "/assets/img");

function theme_add_scripts() {
	// подключаем файл стилей темы
    wp_enqueue_style( 'style-consts', get_template_directory_uri() . '/src/style/_const.css' );
    wp_enqueue_style( 'style-buttons', get_template_directory_uri() . '/src/style/ui/buttons.css' );
    wp_enqueue_style( 'style-inputs', get_template_directory_uri() . '/src/style/ui/inputs.css' );
    wp_enqueue_style( 'style-adaptive', get_template_directory_uri() . '/src/style/adaptive.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/src/style/style.css' );

    wp_enqueue_script( 'script-dropdown', get_template_directory_uri() .'/src/script/drop_down.js', array(), '1.0', true );
    wp_enqueue_script( 'script-burger', get_template_directory_uri() .'/src/script/burger_menu.js', array(), '1.0', true );
    wp_enqueue_script( 'script-faq', get_template_directory_uri() .'/src/script/faq_dropdown.js', array(), '1.0', true );

    
}

add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

function custom_product_template_redirect() {
    $product_name = get_query_var('productname');

    if (is_page_template('page-product.php') && $product_name) {
        // Ваш код для обработки и отображения товара по $product_name
        include(get_template_directory() . '/page-product.php');
        exit;
    }
}

add_action('template_redirect', 'custom_product_template_redirect');


