<?php


 ////////////////////////////////////		
// ショートコードの生成	
////////////////////////////////////	

//サイトurl（トップページ）のパスを取得する
function my_home_url() {
	return home_url();
}
add_shortcode('home', 'my_home_url');

//テーマフォルダのパスを取得する
function my_template_url() {
	return get_template_directory_uri();
}
add_shortcode('template', 'my_template_url');


//テーマフォルダのパスを取得する
function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
add_shortcode('template_url', 'shortcode_templateurl');


 
 ////////////////////////////////////		
// アイキャッチ画像に対応する	
////////////////////////////////////	
function my_after_setup_theme(){
 // アイキャッチ画像を有効にする
 add_theme_support( 'post-thumbnails' ); 
 // アイキャッチ画像サイズを指定する（横：640px 縦：384）
 // 画像サイズをオーバーした場合は切り抜き
 set_post_thumbnail_size( 640, 384, true ); 
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );



