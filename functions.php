<?php 
function add_css_js() {//関数名add_css_js()を作成
	//CSSの読み込みはここから
	
	//全てのページにstyle.cssを読み込み
	wp_enqueue_style('style',get_template_directory_uri().'css/style.css' );

}
// タイトルタグの設定
add_theme_support('title-tag');


// カスタムメニュー（ナビゲーション）
register_nav_menu('sitenav','サイトナビゲーション');

// 管理画面を表示されないようにする（margin-topがはいってしまう）
add_filter( 'show_admin_bar', '__return_false' );
?>