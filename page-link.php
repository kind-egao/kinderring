<?php

/**
 * Template Name: リンク
 */
get_header(); ?>

<h1 class="tit01">リンク</h1>

<h2 class="tit02">【お役立ち情報】</h2>
<ul class="link-list">
  <?php
  $useful_links = array(
    array(
      'title' => '病児保育室　エキチカ保育園Ⅱ',
      'url' => 'https://shinryukai.org/ekichika2/byogoji/',
      'desc' => 'ときわ台駅近くの病児保育室です。北区・練馬区など板橋区以外の方も利用できます。1歳以上で、区の病児・病後児保育の登録が済んでいる方が対象になります。前日に当院を受診頂ければ、翌日の病児保育用の診断書を記載しています。1日2000円(給食費500円を含む)で利用できます。',
      'image' => 'byogoji.png'
    ),
    array(
      'title' => '板橋区病児・病後児保育のご案内',
      'url' => 'https://www.city.itabashi.tokyo.jp/kosodate/azukeru/myouni/index.html',
      'desc' => '板橋区の認可病児保育室、病児・病後児保育の登録についての案内です。',
      'image' => 'itabashi_byougoji.png'
    ),
    array(
      'title' => '認可保育施設登園許可証',
      'url' => 'https://www.city.itabashi.tokyo.jp/kosodate/azukeru/ninka/kyoka/index.html',
      'desc' => '板橋区認可保育施設の登園許可証はこちらからダウンロードできます。',
      'image' => 'kyoka.png'
    ),
    array(
      'title' => 'いたばし子育てナビアプリ',
      'url' => 'http://www.city.itabashi.tokyo.jp/c_kurashi/084/084819.html',
      'desc' => 'スマートフォンに登録すると便利です。',
      'image' => 'kosodate_navi.png'
    ),
    array(
      'title' => 'KNOW★VPD!',
      'url' => 'http://www.know-vpd.jp/',
      'desc' => 'こどものワクチン情報サイトです。',
      'image' => 'know_vpd.png'
    ),
    array(
      'title' => 'こどもとおとなのワクチンサイト',
      'url' => 'https://www.vaccine4all.jp/',
      'desc' => 'おとなも含めたワクチンの情報サイトです。',
      'image' => 'vaccine4all.png'
    ),
    array(
      'title' => '国立感染症研究所',
      'url' => 'https://www.niid.go.jp/niid/ja/from-idsc.html',
      'desc' => '最新の感染症の流行状況や詳細情報がわかります。',
      'image' => 'niid.png'
    ),
    array(
      'title' => 'こどもの救急',
      'url' => 'http://www.kodomo-qq.jp/',
      'desc' => '夜間や緊急時の対応方法や、小児救急電話相談(#8000)など色々な情報があります。',
      'image' => 'kodomo_qq.png'
    ),
    array(
      'title' => '日本中毒情報センター',
      'url' => 'https://www.j-poison-ic.jp/',
      'desc' => '誤食や誤飲による中毒事故の対応がわかります。',
      'image' => 'poison_center.png'
    ),
    array(
      'title' => '板橋区医師会',
      'url' => 'https://itb.tokyo.med.or.jp/index.html',
      'desc' => '医師会のホームページです。休日診療などの情報があります。',
      'image' => 'itabashi_ishikai.png'
    ),
    array(
      'title' => '日本小児科学会',
      'url' => 'http://www.jpeds.or.jp/',
      'desc' => '小児医療について標準的な指針や情報を発信しています。',
      'image' => 'jpeds.png'
    ),
    array(
      'title' => '小笠原まきさんホームページ',
      'url' => 'http://maki-o.com/',
      'desc' => '当院の壁画を描いて頂いたホスピタルアーティスト・絵本作家さんのホームページです。',
      'image' => 'maki_ogasawara.png'
    )
  );

  foreach ($useful_links as $link) {
    echo '<li>
        <a href="' . esc_url($link['url']) . '" target="_blank">
          <img src="' . get_template_directory_uri() . '/images/links/' . esc_attr($link['image']) . '" alt="' . esc_html($link['title']) . '">
          <p>' . esc_html($link['title']) . ' <i class="fa-solid fa-window-restore"></i></p>
          <p>' . esc_html($link['desc']) . '</p>
        </a>
      </li>';
  }

  ?>
</ul>

<h2 class="tit02">【主な紹介先病院】</h2>
<ul class="link-list">
  <?php
  $hospital_links = array(
    array(
      'title' => '板橋中央総合病院/板橋セントラルクリニック',
      'url' => 'https://ims-itabashi.jp/',
      'image' => 'ims.png'
    ),
    array('title' => '帝京大学医学部付属病院', 'url' => 'http://www.teikyo-hospital.jp/', 'image' => 'teikyo_hospital.png'),
    array('title' => '日本大学医学部付属板橋病院', 'url' => 'http://www.med.nihon-u.ac.jp/hospital/itabashi/', 'image' => 'nichidai_itabashi.png'),
    array('title' => '東京都立豊島病院', 'url' => 'https://www.tmhp.jp/toshima/index.html', 'image' => 'toshima_hp.png'),
    array('title' => '東京北医療センター', 'url' => 'https://www.tokyokita-jadecom.jp/', 'image' => 'tokyo_kita.png'),
    array('title' => '板橋区医師会病院', 'url' => 'http://www.itabashi-med.jp/', 'image' => 'itabashi_hospital.png'),
    array('title' => '国立成育医療研究センター', 'url' => 'http://www.ncchd.go.jp/index.html', 'image' => 'ncchd.png')
  );

  foreach ($hospital_links as $link) {
    echo '<li>
        <a href="' . esc_url($link['url']) . '" target="_blank">
          <img src="' . get_template_directory_uri() . '/images/links/' . esc_attr($link['image']) . '" alt="' . esc_html($link['title']) . '">
          <p>' . esc_html($link['title']) . ' <i class="fa-solid fa-window-restore"></i></p>
        </a>
      </li>';
  }
  ?>
</ul>

<?php get_footer(); ?>