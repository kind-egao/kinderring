<?php

/**
 * Template Name: クリニックだより：一覧
 * Template Post Type: post
 */

get_header(); ?>

<p class="pageTitle">クリニックだwより</p>
<div class="inner">
	<article>
		<?php
		$args = array(
			'posts_per_page' => 5 // 表示件数の指定
		);
		$posts = get_posts($args);
		foreach ($posts as $post) : // ループの開始
			setup_postdata($post); // 記事データの取得
		?>
			<div class="post_block">
				<h1 class="subTitle"><span><?php the_time('Y年n月j日（D）'); ?></span><br><?php the_title(); ?></h1>


				<p class="txt"><?php echo mb_substr($post->post_content, 0, 150) . '……'; ?></p>
				<p class="more"><a href="<?php the_permalink(); ?>">続きを読む</a></p>
			</div>
		<?php
		endforeach; // ループの終了
		wp_reset_postdata(); // 直前のクエリを復元する
		?>

		<div>
			<?php global $wp_rewrite;
			$paginate_base = get_pagenum_link(1);
			if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
				$paginate_format = '';
				$paginate_base = add_query_arg('paged', '%#%');
			} else {
				$paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
					user_trailingslashit('page/%#%/', 'paged');;
				$paginate_base .= '%_%';
			}
			echo paginate_links(array(
				'base' => $paginate_base,
				'format' => $paginate_format,
				'total' => $wp_query->max_num_pages,
				'mid_size' => 4,
				'current' => ($paged ? $paged : 1),
				'prev_text' => '«',
				'next_text' => '»',
			)); ?>
		</div>

	</article>

	<aside class="side-area">
		<div class="sinner">
			<div class="sec-side">
				<h2><a href="<?php echo esc_url(home_url('/')); ?>news/">クリニックだより一覧</a></h2>
				<ul class="recent-list">

					<?php query_posts('post_type=post&showposts=-1'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<time><?php the_time('Y年n月j日（D）'); ?></time>
									<h3><?php the_title(); ?></h3>
								</a>
							</li>
					<?php endwhile;
					endif; ?>
					<?php query_posts($query_string); ?>

				</ul>
			</div>
		</div>
	</aside>
</div>

<?php get_footer(); ?>