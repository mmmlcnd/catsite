<?php 
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );

/**
 * カスタムメニューを使用可能にする
 */
add_theme_support( 'menus' );

/**
 * Contact Form 7 確認画面
 */
add_action( 'wp_footer', 'mycustom_wp_footer' );
 
function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    locaton.replace("http://localhost/hotel/contact/thanks/");
}, false );
</script>
<?php
}


/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/**
 * コメント投稿フォームの「名前」「メールアドレス」「ウェブサイト」の項目を削除する
 */
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields( $args ) {
	$args['author'] = ''; // 「名前」を削除
	$args['email'] = ''; // 「メールアドレス」を削除   
	$args['url'] = ''; // 「ウェブサイト」を削除
    return $args;
}

/**
 * <head>内にRSSのlink要素を出力する
 */
add_theme_support( 'automatic-feed-links' );

/**
 * RSSに配信する文字数を設定する
 */
add_filter('excerpt_mblength', 'my_excerpt_mblength'); 
function my_excerpt_mblength( $length ) {    
     return 100; //抜粋に出力する文字数
}   

/**
 * RSSに「続きを読む」のリンクを追加する
 */
add_filter('excerpt_more', 'my_excerpt_more');
function my_excerpt_more() {
    return '...<a href="'. get_permalink() . '">続きを読む→</a>';
}

/**
 * RSSの停止
 */
remove_action('do_feed_rdf', 'do_feed_rdf');
remove_action('do_feed_rss', 'do_feed_rss');
remove_action('do_feed_rss2', 'do_feed_rss2');
remove_action('do_feed_atom', 'do_feed_atom');
//head内のlink要素を停止
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links',2);
remove_action('wp_head', 'feed_links_extra',3);

/**
 * メインクエリの変更
 */
add_action('pre_get_post','my_pre_get_posts');

/**
 * pやbrを入れない
 */
remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする


/**
 * ショートコード
 
 */

function shortcode_url(){
	return get_template_directory_uri();
}
add_shortcode('dir_url','shortcode_url');

/**
 * カスタム投稿
 
 */

function cptui_register_my_cpts() {

	/**
	 * Post Type: 猫紹介.
	 */

	$labels = [
		"name" => __( "猫紹介", "custom-post-type-ui" ),
		"singular_name" => __( "猫紹介", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "猫紹介", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "catintro", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "catintro", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

/**
 * カスタム投稿　投稿タイプ
 
 */

function cptui_register_my_cpts_catintro() {

	/**
	 * Post Type: 猫紹介.
	 */

	$labels = [
		"name" => __( "cats", "custom-post-type-ui" ),
		"singular_name" => __( "cat", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "cats", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "catintro", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "cats", $args );
}

add_action( 'init', 'cptui_register_my_cpts_catintro' );

