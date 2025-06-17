<?php

/**
 * Template Name: 問診票
 */
get_header(); ?>
<section class="questionnaire">
  <div class="questionnaire__inner">
    <h1 class="questionnaire__title">問診票・予診票</h1>
    <p class="questionnaire__intro questionnaire__content-body">
      問診票は下記よりダウンロードできますので、あらかじめ印刷してご記入いただきますと、受付時のお手続きがスムーズになります。
    </p>

    <ul class="questionnaire__nav">
      <li><a href="#section1">初診・再診用問診票<br><i class="fa-solid fa-angle-down"></i></a></li>
      <li><a href="#section2">相談用問診票<br><i class="fa-solid fa-angle-down"></i></a></li>
      <li><a href="#section3">予防接種（任意接種）<br><i class="fa-solid fa-angle-down"></i></a></li>
      <li><a href="#section4">健康診査（任意）<br><i class="fa-solid fa-angle-down"></i></a></li>
    </ul>

    <!-- 初診・再診用 -->
    <section class="questionnaire__block" id="section1">
      <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tanuki.png" alt="たぬき">初診・再診用問診票</h2>
      <div class="questionnaire__content-body">
        <p class="questionnaire__desc">
          初診の方、または久しぶりに新しい症状で受診される方は、こちらの問診票をダウンロードしてご記入の上お持ちください。<br>
          印刷環境がない場合は、院内でご記入いただくことも可能ですが、簡単に内容を紙に書き写していただいても構いません。
        </p>
        <ul class="questionnaire__list questionnaire__list--fixed">
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec01-1.pdf" target="_blank"><span>初診・再診用問診票</span> <i class="fa-regular fa-file-pdf"></i></a></li>
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec01-2.pdf" target="_blank"><span>Resistration sheet(English)</span> <i class="fa-regular fa-file-pdf"></i></a></li>
        </ul>
      </div>
    </section>

    <!-- 相談用 -->
    <section class="questionnaire__block" id="section2">
      <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tanuki.png" alt="たぬき">相談用問診票</h2>
      <div class="questionnaire__content-body">
        <p class="questionnaire__desc">アレルギー、発達、夜尿の相談で受診される方は、こちらの相談用問診票をダウンロードしてご記入の上お持ちください。初診の方は「初診・再診用問診票」もあわせてご記入ください。<br>印刷環境がない場合は、内容を紙に書き写してお持ちいただくようお願いしています。事前に窓口でお渡しすることもできます。<br>なお、ゆっくりお話の時間をとりたいため相談の受診についてはお電話でご予約下さい。</p>
        <ul class="questionnaire__list questionnaire__list--fixed">
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec02-1.pdf" target="_blank"><span>食物アレルギー</span> <i class="fa-regular fa-file-pdf"></i></a></li>
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec02-2.pdf" target="_blank"><span>発達</span> <i class="fa-regular fa-file-pdf"></i></a></li>
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec02-3.pdf" target="_blank"><span>夜尿</span> <i class="fa-regular fa-file-pdf"></i></a></li>
        </ul>
      </div>
    </section>

    <!-- 予防接種 -->
    <section class="questionnaire__block" id="section3">
      <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tanuki.png" alt="たぬき">予防接種（任意接種）</h2>
      <div class="questionnaire__content-body">
        <p class="questionnaire__desc">
          任意の予防接種を受ける方はこちらの予診票をダウンロードしてご記入の上、母子手帳と一緒にお持ちください。<br>
          印刷環境がない場合は、院内でご記入いただくか、事前に窓口でお渡しすることもできます。<br>
          A型肝炎や狂犬病などの海外渡航ワクチンも受け付けております。渡航先や期間に応じてスケジュールを立てますので、母子手帳をご用意の上お問合せください。
        </p>
        <ul class="questionnaire__list questionnaire__list--fixed">
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec03-1.pdf" target="_blank"><span>インフルエンザ</span> <i class="fa-regular fa-file-pdf"></i></a></li>
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec03-2.pdf" target="_blank"><span>三種混合</span> <i class="fa-regular fa-file-pdf"></i></a></li>
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec03-3.pdf" target="_blank"><span>不活化ポリオ</span> <i class="fa-regular fa-file-pdf"></i></a></li>
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec03-4.pdf" target="_blank"><span>B型肝炎</span> <i class="fa-regular fa-file-pdf"></i></a></li>
        </ul>
      </div>
    </section>

    <!-- 健康診査 -->
    <section class="questionnaire__block" id="section4">
      <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tanuki.png" alt="たぬき">健康診査（任意）</h2>
      <div class="questionnaire__content-body">
        <p class="questionnaire__desc">
          任意の健康診査を受ける方はこちらの予診票をダウンロードしてご記入の上、母子手帳と一緒にお持ちください。<br>
          印刷環境がない場合は、クリニックデビュー健診については内容を簡単に紙に書き写してお持ちください。<br>
          5歳健診については予診票記入に時間がかかります。印刷環境がない場合は事前に窓口で用紙をお渡しできますのでお声かけください。1〜2枚目は保護者、3枚目は園の担任の先生が記入してください。<br>
          1歳児健診については母子手帳に記載欄がありますのでそちらをご記入ください。
        </p>
        <ul class="questionnaire__list questionnaire__list--fixed">
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec04-1.pdf" target="_blank"><span>クリニックデビュー健診</span> <i class="fa-regular fa-file-pdf"></i></a></li>
          <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/que-sec04-2.pdf" target="_blank"><span>5歳児健診</span> <i class="fa-regular fa-file-pdf"></i></a></li>
        </ul>
      </div>
    </section>
  </div>
</section>
<?php get_footer(); ?>