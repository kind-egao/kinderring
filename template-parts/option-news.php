<?php

/**
 * クリニックだよりの表示設定
 */

// 表示件数の設定
$posts_per_page_pc = 10;  // PCでの表示件数
$posts_per_page_sp = 6;   // スマホでの表示件数

// 現在のデバイスに応じて表示件数を設定
$posts_per_page = wp_is_mobile() ? $posts_per_page_sp : $posts_per_page_pc;

// ページネーションの設定
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// 投稿を取得するためのクエリ設定
$args = array(
	'post_type' => 'post',
	'posts_per_page' => $posts_per_page,
	'paged' => $paged
);
