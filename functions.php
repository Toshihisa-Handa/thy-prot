<?php 
//CSSの読み込みはここから
function add_css_js() {//関数名add_css_js()を作成
	//全てのページにstyle.cssを読み込み
	wp_enqueue_style('style',get_template_directory_uri().'css/style.css' );
}
// タイトルタグの設定
add_theme_support('title-tag');


// 	カスタムメニュー（おすすめ記事）
register_nav_menu('pickupnav','おすすめ記事');

register_nav_menus(array(
	'sitenav'=>'サイトナビゲーション',
	'place_footer'=>'フッターナビ'
));


// 管理画面を表示されないようにする（margin-topがはいってしまう）
// add_filter( 'show_admin_bar', '__return_false' );

// 	アイキャッチ画像
add_theme_support('post-thumbnails');

// ウェジェットエリアの利用
register_sidebar(array(
	'id'=>'submenu',
	'name'=>'サブメニュー',
	'description'=>'サイドバーにウェジェットを指定',
	'before_widget'=>'<div class="commonTitleBox mt-30">',
	'after_widget'=>'</div>',
	'before_title'=>'<p class="text">',
	'after_title'=>'</p>'
));