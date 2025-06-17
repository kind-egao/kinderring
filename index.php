<?php get_header(); ?>

<?php
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

<section class="slider">
  <div class="inner">
    <div id="slider">
      <ul class="pcArea">
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_slider01_190731.png" alt="slider01"></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_slider02.png" alt="slider02"></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_slider03.png" alt="slider03"></li>
        <!-- 			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_slider04.png" alt="slider04"></li> -->
      </ul>
      <ul class="spArea">
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_slider01sp.png" alt="slider01"></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_slider02sp.png" alt="slider02"></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_slider03sp.png" alt="slider03"></li>
        <!-- 			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_slider04sp.png" alt="slider04"></li> -->
      </ul>
      <div class="arrows">
        <div class="slick-next">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_sliderNext.png" alt="next" class="">
          <!-- <i class="fas fa-angle-right" class="spArea"></i> -->
        </div>
        <div class="slick-prev">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_sliderPrev.png" alt="prev" class="">
          <!-- <i class="fas fa-angle-left" class="spArea"></i> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section id="news" class="p-news">
  <div class="p-news__inner">
    <h1>クリニックだより</h1>
    <ul class="p-news__list">
      <?php query_posts('post_type=post&showposts=3'); ?>
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
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
                  echo '<span class="p-news__icon -new">NEW</span>';
                }
                // 重要記事の判定（カスタムフィールドで設定）
                if (get_post_meta(get_the_ID(), 'news_important', true)) {
                  echo '<span class="p-news__icon -important">重要</span>';
                }
                ?>
              </div>
              <p><?php the_title(); ?></p>
            </a>
          </li>
      <?php endwhile;
      endif; ?>
      <?php query_posts($query_string); ?>
    </ul>
    <a class="p-news__link" href="<?php echo esc_url(home_url('/')); ?>news/">クリニックだより一覧 <i class="fa-solid fa-chevron-right"></i></a>
  </div>

  <div class="p-staff">
    <a href="https://arwrk.net/recruit/svnabwqgxetojlt" target="_blank">スタッフ募集！詳しくはこちら</a>
  </div>
</section>
<!--news-->

<div class="reserveBtnSp"><a href="https://clinic.smiley-reserve.jp/kinderring/reserve/showPeriods" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_reservebtn.png" alt="インターネット予約 当院ではインターネット予約を導入しております。 ご予約はこちらから"></a></div>


<section id="content" class="content cf">
  <div class="inner">
    <h1>診療内容</h1>
    <ul class="department">
      <li>
        <p>
          <a href="<?php echo esc_url(home_url('/medical01/')); ?>"><img class="btn" src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_btn01_off.png" alt="小児科"></a>
          <span class="head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_head.png" alt=""></span>
          <span class="tail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_tail.png" alt=""></span>
        </p>
      </li>
      <li>
        <p>
          <a href="<?php echo esc_url(home_url('/medical02/')); ?>"><img class="btn" src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_btn02_off.png" alt="アレルギー科"></a>
          <span class="head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_head.png" alt=""></span>
          <span class="tail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_tail.png" alt=""></span>
        </p>
      </li>
      <li>
        <p>
          <a href="<?php echo esc_url(home_url('/medical03/')); ?>"><img class="btn" src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_btn03_off.png" alt="小児皮膚科"></a>
          <span class="head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_head.png" alt=""></span>
          <span class="tail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_tail.png" alt=""></span>
        </p>
      </li>
      <li>
        <p>
          <a href="<?php echo esc_url(home_url('/medical04/')); ?>"><img class="btn" src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_btn04_off.png" alt="舌下免疫療法"></a>
          <span class="head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_head.png" alt=""></span>
          <span class="tail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_tail.png" alt=""></span>
        </p>
      </li>
      <li>
        <p>
          <a href="<?php echo esc_url(home_url('/medical05/')); ?>"><img class="btn" src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_btn05_off.png" alt="予防接種"></a>
          <span class="head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_head.png" alt=""></span>
          <span class="tail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_tail.png" alt=""></span>
        </p>
      </li>
      <li>
        <p>
          <a href="<?php echo esc_url(home_url('/medical06/')); ?>"><img class="btn" src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_btn06_off.png" alt="乳幼児健診"></a>
          <span class="head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_head.png" alt=""></span>
          <span class="tail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_content_img_tail.png" alt=""></span>
        </p>
      </li>
    </ul>
  </div>
</section>
<!--content-->

<section id="businesshours" class="businesshours">
  <div class="inner">
    <h1>診療時間</h1>
    <p class="op_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_open_img01.png" alt="診療時間"></p>
    <ul class="op_att">
      <li>★一般診察の予約受付は診療終了の30分前までです。<br>終了15分前には受付窓口へおこしください。</li>
      <li>★一般診療の時間や土曜日も予防接種・乳幼児健診が可能です。<br>お電話でお問合せください。</li>
      <li>★お子様とご来院された保護者の方の診療も承っております。</li>
    </ul>
  </div>
</section>
<!--businesshours-->

<section id="about" class="about">
  <div class="inner">
    <h1>ごあいさつ</h1>
    <p class="ab_read">
      こどもたちにえがおを、<br class="spArea">おかあさんやおとうさんに安心と信頼を<br>
      なんでも聞けて、なんでも話せる、<br class="spArea">アットホームなクリニックでありたい。
      <br> いつもえがおで待っています。
    </p>
    <p class="ab_txt">
      はじめまして。<br> このたびご縁があり、板橋区前野町のはっとり小児科跡地に、<br class="pcArea"> 「えがおこどもクリニック」を開設させて頂くことになりました。<br> 乳幼児のお子さんがいらっしゃるご家庭、<br class="spArea">特に初めてご出産を経験されたご両親は、<br> 不安なことがたくさんあるかと思います。<br> 病気を治すだけでなく、ご家族の不安に寄り添い、<br> こどものことならなんでも相談できる温かいクリニックでありたいと思っています。<br> どうぞよろしくお願い致します。
    </p>
    <p class="ab_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_about_img01.png" alt="理事長 小児科医師 渡部 浩平 Kohei Watanabe,M.D." class="pcArea"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_about_img01sp.png" alt="理事長 小児科医師 渡部 浩平 Kohei Watanabe,M.D." class="spArea"></p>
  </div>
</section>
<!--about-->

<section id="access" class="access">
  <div class="inner">
    <h1>アクセス</h1>
    <p class="ac_map"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_access_img01_190731.png" alt="マップ"></p>

    <div class="acwrap">
      <div class="acwrapL">
        <p class="ac_add">東京都板橋区前野町3丁目31-3</p>
        <p class="ac_tel"><span>TEL</span><a href="tel:03-5994-7250" target="_blank">03-5994-7250</a></p>
      </div>
      <!-- acwrapL -->

      <div class="acwrapR">
        <p class="ac_parking"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_access_icon01.png" alt="専用駐車場1台あります!">専用駐車場3台あります!</span></p>
        <p class="ac_gmap"><a href="https://goo.gl/maps/6jWfxviZh9p" target="_blank">Google Map</a></p>
      </div>
      <!-- acwrapR -->
    </div>
    <!-- acwrap -->
    <p class="ac_access">
      都営三田線 「志村坂上」駅より 徒歩8分／「本蓮沼」駅より 徒歩10分<br>東武東上線 「ときわ台」駅より 徒歩15分

    </p>
    <!-- ac_access -->
  </div>
</section>
<!--access-->

<?php get_footer(); ?>