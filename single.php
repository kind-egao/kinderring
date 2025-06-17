<?php

/**
 * Template Name: クリニックだより：記事詳細
 * Template Post Type: post
 */
get_header();

// 曜日の日本語表記
$weekday = array(
	'Mon' => '月',
	'Tue' => '火',
	'Wed' => '水',
	'Thu' => '木',
	'Fri' => '金',
	'Sat' => '土',
	'Sun' => '日'
);
?>

<div class="p-single">
	<p class="p-single__ttl">クリニックだより</p>
	<div class="p-single__inner">

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article class="p-single__article">
					<h1>
						<span><?php
									$post_date = get_the_date('Y-m-d');
									$date = get_the_date('Y年n月j日');
									$day = date('D', strtotime($post_date));
									echo $date . '（' . $weekday[$day] . '）';
									?></span><?php the_title(); ?>
					</h1>
					<div class="p-single__article__content">
						<?php echo nl2br(get_the_content()); ?>
						<a href="<?php echo home_url('/news'); ?>" class="p-single__btn -list"><span>最新のクリニックだよりを見る</span> <i class="fa-solid fa-chevron-right"></i></a>
					</div>
				</article>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>


		<aside class="p-aside">
			<div class="p-aside__tab">
				<button id="tab__category" class="-active">
					カテゴリ
				</button>
				<button id="tab__archive" class="">
					アーカイブ
				</button>
			</div>

			<div class="p-aside__content">
				<h2>カテゴリ</h2>
				<ul class="p-aside__content__box  -active ">
					<li>
						<a class="-all" href="<?php echo home_url("/news"); ?>">
							<i class="fa-solid fa-chevron-right"></i>すべて
						</a>
					</li>
					<?php
					$current_cat = get_the_category();
					$current_cat_id = $current_cat[0]->term_id;
					$categories = get_categories();
					foreach ($categories as $category) :;
					?>
						<li>
							<a href="<?php echo get_category_link($category->term_id); ?>">
								<i class="fa-solid fa-chevron-right"></i><?php echo $category->name; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<h2>アーカイブ</h2>
				<ul class="p-aside__content__box">
					<?php
					$years = array();
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => -1
					);
					$query = new WP_Query($args);

					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
							$year = get_the_date('Y');
							if (!in_array($year, $years)) {
								$years[] = $year;
							}
						}
					}
					wp_reset_postdata();

					rsort($years);
					foreach ($years as $year) {
						echo '<li><a href="' . get_year_link($year) . '"><i class="fa-solid fa-chevron-right"></i>' . $year . '年</a></li>';
					}
					?>
				</ul>
			</div>

		</aside>
	</div>
</div>
<?php get_footer(); ?>