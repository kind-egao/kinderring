<?php

/**
 * Template Name: クリニックだより
 */

get_header();

// 設定ファイルの読み込み
require_once get_template_directory() . '/template-parts/option-news.php';

// 投稿の取得
$query = new WP_Query($args);

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

<div class="p-archives">
	<p class="p-archives__ttl">クリニックだより</p>
	<div class="p-archives__inner">
		<?php if ($query->have_posts()) : ?>
			<article class="p-archives__article">
				<ul class="p-archives__article__list">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<div>
									<time><?php
												$post_date = get_the_date('Y-m-d');
												$date = get_the_date('Y年n月j日');
												$day = date('D', strtotime($post_date));
												echo $date . '（' . $weekday[$day] . '）';
												?></time>
									<?php
									// 新着記事の判定（7日以内）
									$seven_days_ago = date('Y-m-d', strtotime('-7 days'));
									if ($post_date >= $seven_days_ago) {
										echo '<span class="p-archives__article__icon -new">NEW</span>';
									}
									// 重要記事の判定（カスタムフィールドで設定）
									if (get_post_meta(get_the_ID(), 'news_important', true)) {
										echo '<span class="p-archives__article__icon -important">重要</span>';
									}
									?>
								</div>
								<p><?php the_title(); ?></p>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>

				<?php
				// ページネーションの表示
				if ($query->max_num_pages > 1) {
					$current_page = max(1, get_query_var('paged'));
					$total_pages = $query->max_num_pages;

					echo '<div class="p-archives__article__pagination">';

					// 前のページへのリンク
					if ($current_page > 1) {
						echo '<a class="prev page-numbers" href="' . get_pagenum_link($current_page - 1) . '">＜</a>';
					}

					// PC版でのみ表示するページ番号
					echo '<div class="p-archives__article__pagination__numbers">';

					// 最初のページへのリンク（現在のページが3以上の場合）
					if ($current_page > 2) {
						echo '<a class="page-numbers" href="' . get_pagenum_link(1) . '">1</a>';
						if ($current_page > 3) {
							echo '<span class="page-numbers dots">…</span>';
						}
					}

					// 前のページへのリンク（現在のページが2以上の場合）
					if ($current_page > 1) {
						echo '<a class="page-numbers" href="' . get_pagenum_link($current_page - 1) . '">' . ($current_page - 1) . '</a>';
					}

					// 現在のページ
					echo '<span class="page-numbers current">' . $current_page . '</span>';

					// 次のページへのリンク（次のページが存在する場合）
					if ($current_page < $total_pages) {
						echo '<a class="page-numbers" href="' . get_pagenum_link($current_page + 1) . '">' . ($current_page + 1) . '</a>';
					}

					// 最後のページへのリンク（現在のページが最後から2番目以前の場合）
					if ($current_page < $total_pages - 1) {
						if ($current_page < $total_pages - 2) {
							echo '<span class="page-numbers dots">…</span>';
						}
						echo '<a class="page-numbers" href="' . get_pagenum_link($total_pages) . '">' . $total_pages . '</a>';
					}

					echo '</div>';

					// 次のページへのリンク
					if ($current_page < $total_pages) {
						echo '<a class="next page-numbers" href="' . get_pagenum_link($current_page + 1) . '">＞</a>';
					}

					echo '</div>';
				}
				wp_reset_postdata();
				?>
			</article>
		<?php else : ?>
			<p class="p-archives__no-posts">記事が見つかりませんでした。</p>
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
					$categories = get_categories();
					foreach ($categories as $category) :
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