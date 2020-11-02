<?php 
function add_css_js() {//関数名add_css_js()を作成
	//CSSの読み込みはここから
	
	//全てのページにstyle.cssを読み込み
	wp_enqueue_style('style',get_template_directory_uri().'css/style.css' );


}





?>