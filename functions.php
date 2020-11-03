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

// カスタム投稿タイプ
// function init_func(){
// 	register_post_type('bukken',[
// 		'labels'=>[
// 			'name'=>'物件名',
// 		],
// 		'public'=>true,
// 		//一覧表示
// 		'has_archive'=>true, 
// 		'hierarchical'=>false,
// 		'menu_position'=>5,
// 		// メニューアイコン
// 		'menu_icon'=>''
// 	]);
// }
// add_action('init','init_func');
?>