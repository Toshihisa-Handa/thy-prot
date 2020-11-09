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

//  ページネーション	
function pagination( $args = array() ) {
	$navigation = '';
	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
	$news_args = array(
		'post_status' => 'publish',
		'posts_per_page' => 2,
		'orderby' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	 );
	$query = new WP_Query($news_args );
	// 1ページのみの場合は出力しない
	if ( $query->max_num_pages > 1) {
		$args = wp_parse_args(
			$args,
			array(
				'mid_size'           => 2,
				'prev_text'          => _x( 'Previous', 'previous set of posts' ),
				'next_text'          => _x( 'Next', 'next set of posts' ),
				'screen_reader_text' => __( 'Posts navigation' ),
				'type' => 'list',  //リストとしてマークアップ
			)
		);
 
		// type に list 以外が指定されていたら list に強制
		$args['type'] = 'list';
		
		// これが無いとページネーション自体が表示されなかった。
		$args['total']=$query->max_num_pages;
 
		// paginate_links() を使ってリンクを生成
		$links = paginate_links( $args );
		 
		if ( $links ) {
			
			$patterns = array(
				'#<li><a class=([\'\"]([^\'\"]*)[\'\"]) ([^>]*>[^<]*)</a></li>#', 
				'#<li><span class=([\'\"]([^\'\"]*)[\'\"])\s?([^>]*>[^<]*)</span></li>#',
				'#<li><span (aria-current=[\'\"]([^\'\"]*)[\'\"]) class=([\'\"]([^\'\"]*)[\'\"])\s?([^>]*>[^<]*)</span></li>#',
			);
			
			$replacements = array(
				'<li class="page-item"><a class="$2 page-link" $3</a></li>',
				'<li class="page-item disabled"><span class="$2 page-link" $3</span></li>',
				'<li class="page-item active"><span $1 class="$4 page-link" $5</span><span class="sr-only">(現在のページ)</span></li>',
			);
 
			ksort($patterns);
			ksort($replacements);
			$links = preg_replace($patterns, $replacements, $links);
			
			//_navigation_markup() は使わずに nav 要素でマークアップ
			$navigation = '
			<nav class="navigation %s" role="navigation" aria-label="%s">
				<div class="nav-links">%s</div>
			</nav>';
			//nav 要素の aria-label の値には screen_reader_text の値を設定
			$navigation = sprintf( $navigation, 'pagination', esc_html( $args['screen_reader_text'] ), $links );
		}
	}
	echo $navigation;
}