<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

	<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<![endif]-->
	<title>
		<?php wp_title('', true); ?>
		<?php if (wp_title('', false)) { ?> | <?php } ?>
		<?php bloginfo('name'); ?>
	</title>

	<!--共通-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,400,700,900&amp;subset=japanese" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">

	<script type="text/javascript">
		if (window.matchMedia('screen and (min-width:839px)').matches) {
			jQuery(function($) {
				var nav = $('header'),
					offset = nav.offset();
				$(window).scroll(function() {
					if ($(window).scrollTop() > offset.top + 250) {
						nav.addClass('fixed');
					} else {
						nav.removeClass('fixed');
					}
				});
			});
		}
	</script>

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
	<?php if (is_home() || is_page('questionnaire') || is_page('price')): ?>
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style_ota.css" rel="stylesheet">
	<?php endif; ?>
	<!-- drawer -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/iscroll.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/drawer.min.js"></script>
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/drawer.css" rel="stylesheet">
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<!--/共通-->



	<?php if (is_home()) { ?>

		<!-- slick -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css">
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.js"></script>

		<script>
			if (window.matchMedia('screen and (min-width:841px)').matches) {
				$(document).ready(function() {
					var slick = $('.slider .inner .pcArea').slick({
						infinite: false,
						autoplay: true,
						autoplaySpeed: 4500,
						appendArrows: $('.arrows')
					});
					//動作しない時のために、クリックイベントにリスナーを追加しておく。
					$('.slick-next').on('click', function() {
						slick.slickNext();
					});
					$('.slick-prev').on('click', function() {
						slick.slickPrev();
					});
				});
			} else if (window.matchMedia('screen and (max-width:840px)').matches) {
				$(document).ready(function() {
					var slick = $('.slider .inner .spArea').slick({
						infinite: true,
						autoplay: true,
						autoplaySpeed: 5000,
						arrows: false
					});
				});
			}
		</script>

	<?php } ?>


	<?php wp_head(); ?>
</head>

<?php
$body_id = "";
if (is_home()) {
	$body_id  = ' id="top"';
} else if (is_page('doctor')) {
	$body_id  = ' id="doctor" ';
} else if (is_404()) {
	$body_id  = ' id="notfound" ';
} else if (is_page('medical01')) {
	$body_id  = ' id="medical01" ';
} else if (is_page('medical02')) {
	$body_id  = ' id="medical02" ';
} else if (is_page('medical03')) {
	$body_id  = ' id="medical03" ';
} else if (is_page('medical04')) {
	$body_id  = ' id="medical04" ';
} else if (is_page('medical05')) {
	$body_id  = ' id="medical05" ';
} else if (is_page('medical06')) {
	$body_id  = ' id="medical06" ';
} else if (is_page('link')) {
	$body_id  = ' id="link" ';
} else if (is_page('clinic')) {
	$body_id  = ' id="clinic" ';
} else if (is_page('news')) {
	$body_id  = ' id="archives" ';
} else if (is_page()) {
	$body_id  = ' id="' . $post->post_name . '" ';
} else if (is_archive()) {
	$body_id  = ' id="archives" ';
} else if (is_single()) {
	$body_id  = ' id="single" ';
} else if (is_category()) {
	$cat = get_the_category();
	$body_id  = ' id="category_' . $cat[0]->category_nicename . '" ';
}

$body_class = "";
if (is_page('medical01') || is_page('medical02') || is_page('medical03') || is_page('medical04') || is_page('medical05') || is_page('medical06')) {
	$body_class = "medical";
}
?>


<body <?php echo $body_id; ?> class="<?php echo $body_class; ?> drawer drawer--right">

	<!-- ハンバーガーボタン -->
	<button type="button" class="drawer-toggle drawer-hamburger">
		<span class="sr-only">toggle navigation</span>
		<span class="drawer-hamburger-icon"></span>
		<span class="txt">MENU</span>
	</button>

	<div class="drawer-nav" role="navigation">
		<ul class="drawer-menu">
			<li class="dt"><a class="drawer-menu-item" href="<?php echo esc_url(home_url('')); ?>">ホーム</a></li>
			<li class="dt"><a class="drawer-menu-item" href="<?php if (!(is_home())) {
																													echo esc_url(home_url('/'));
																												} ?>#about">ごあいさつ</a></li>
			<!-- ドロップダウンの中身 -->
			<li class="drawer-dropdown ">
				<a class="drawer-menu-item" href="" data-toggle="dropdown">診療内容 <span class="drawer-caret"></span></a>
				<ul class="drawer-dropdown-menu">
					<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical01')); ?>">小児科</a></li>
					<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical02')); ?>">アレルギー科</a></li>
					<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical03')); ?>">小児皮膚科</a></li>
					<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical04')); ?>">舌下免疫療法</a></li>
					<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical05')); ?>">予防接種</a></li>
					<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical06')); ?>">乳幼児健診</a></li>
				</ul>
			</li>
			<li class="dt"><a class="drawer-menu-item" href="<?php echo esc_url(home_url('/price')); ?>">料金表</a></li>
			<li class="dt"><a class="drawer-menu-item" href="<?php echo esc_url(home_url('/access')); ?>">診療時間&amp;アクセス</a></li>
			<li class="drawer-dropdown ">
				<a class="drawer-menu-item" href="<?php echo esc_url(home_url('/clinic')); ?>" data-toggle="dropdown">クリニック紹介 <span class="drawer-caret"></span></a>
				<ul class="drawer-dropdown-menu">
					<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/clinic')); ?>">院内紹介</a></li>
					<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/doctor')); ?>">担当医紹介</a></li>
				</ul>
			</li>
			<li class="dt"><a class="drawer-menu-item" href="<?php echo esc_url(home_url('/flow')); ?>">受診の仕方</a></li>
			<li class="dt"><a class="drawer-menu-item" href="<?php echo esc_url(home_url('/link')); ?>">リンク</a></li>
		</ul>
	</div>
	<div class="wrap">

		<header>
			<div class="hinner">
				<div class="hl">
					<h1>
						<?php if (!is_home()) {
							echo '<a href="' . esc_url(home_url('/')) . '">';
						} ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo.png" alt="医療法人社団キンダーリング えがおこどもクリニック">
						<?php if (!is_home()) {
							echo "</a>";
						} ?>
					</h1>
					<p class="category">小児科／アレルギー科／小児皮膚科</p>
				</div>
				<div class="hr">
					<div class="hrl">
						<p class="name"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_img01.png" alt="EGAO CHILDREN'S CLINIC"></p>
						<p class="add">〒174-0063 東京都板橋区前野町3丁目31-3</p>
						<p class="tel"><a href="tel:03-5994-7250" target="_blank">TEL 03-5994-7250</a></p>
						<p class="fax">FAX 03-5994-3205</p>
					</div>
					<div class="hrr">
						<p class="afternoon">土曜午後診療あり</p>
						<p class="reservetxt">インターネット予約</p>
						<p class="reservebtn"><a href="https://clinic.smiley-reserve.jp/kinderring/reserve/showPeriods" target="_blank">ご予約はこちらから</a></p>
					</div>
				</div>
				<nav>
					<ul class="gnav">
						<li class="gnav__list"><a href="<?php echo esc_url(home_url('')); ?>">ホーム</a></li>
						<li class="gnav__list"><a href="<?php if (!is_home()) {
																							echo esc_url(home_url('/'));
																						} ?>#about">ごあいさつ</a></li>
						<li class="gnav__list">
							<a href="#">診療内容</a>
							<ul class="gnav__list--second">
								<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical01')); ?>">小児科</a></li>
								<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical02')); ?>">アレルギー科</a></li>
								<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical03')); ?>">小児皮膚科</a></li>
								<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical04')); ?>">舌下免疫療法</a></li>
								<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical05')); ?>">予防接種</a></li>
								<li><a class="drawer-dropdown-menu-item" href="<?php echo esc_url(home_url('/medical06')); ?>">乳幼児健診</a></li>
							</ul>
						</li>
						<li class="gnav__list"><a href="<?php echo esc_url(home_url('/price')); ?>">料金表</a></li>
						<li class="gnav__list"><a href="<?php echo esc_url(home_url('/access')); ?>">診療時間&amp;アクセス</a></li>
						<li class="gnav__list">
							<a href="#">クリニック紹介</a>
							<ul class="gnav__list--second">
								<li><a href="<?php echo esc_url(home_url('/clinic')); ?>">院内紹介</a></li>
								<li><a href="<?php echo esc_url(home_url('/doctor')); ?>">担当医紹介</a></li>
							</ul>
						</li>
						<li class="gnav__list"><a href="<?php echo esc_url(home_url('/flow')); ?>">受診の仕方</a></li>
						<li class="gnav__list"><a href="<?php echo esc_url(home_url('/link')); ?>">リンク</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<main>