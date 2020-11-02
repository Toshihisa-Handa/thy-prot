<?php 
/**
 * スクリプトとスタイルを正しくエンキューする方法
 */
function theme_name_scripts() {
    wp_enqueue_style(
        'top', // 読み込み名
        get_template_directory_uri() . '/css/top.css'
    );
    wp_enqueue_style(
        'reset',
        get_template_directory_uri() . '/css/reset.css',
	);
	wp_enqueue_style(
        'parts',
        get_template_directory_uri() . '/css/parts.css',
    );
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/css/style.css',
    );

    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


// カスタムメニュー（ナビゲーション）
register_nav_menu('sitenav','サイトナビゲーション');
