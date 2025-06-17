<?php

/**
 * Template Name: 料金表
 */
get_header(); ?>
<main>
  <section class="price">
    <div class="price__inner">
      <h1 class="price__title">料金表</h1>
      <p class="price__intro price__content-body">
        表示価格はすべて税込みです。<br>
        インターネット予約に選択肢がないものはお電話で受け付けておりますのでお気軽にお問合せ下さい。
      </p>

      <ul class="price__nav">
        <li><a href="#section1">予防接種<br><i class="fa-solid fa-angle-down"></i></a></li>
        <li><a href="#section2">健康診査<br><i class="fa-solid fa-angle-down"></i></a></li>
        <li><a href="#section3">各種検査<br><i class="fa-solid fa-angle-down"></i></a></li>
        <li><a href="#section4">診断書<br><i class="fa-solid fa-angle-down"></i></a></li>
      </ul>

      <section class="price__block" id="section1">
        <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tanuki.png" alt="たぬき">予防接種</h2>
        <div class="price__content-body">
          <p class="price__desc">
            予防接種については接種1回あたりの価格になります。接種回数や期間がワクチンによって異なりますので詳しくはお問合せ下さい。
          </p>
        </div>
        <div class="scroll-hint">
          <table class="price__table">
            <thead>
              <tr>
                <th colspan="3">種類</th>
                <th>料金</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="3">インフルエンザ</td>
                <td class="detail">3歳未満</td>
                <td class="detail">（2回接種）</td>
                <td rowspan="4">9月上旬ごろHPでお知らせ</td>
              </tr>
              <tr>
                <td class="detail">3歳〜13歳未満</td>
                <td class="detail">（2回接種）</td>
              </tr>
              <tr>
                <td class="detail">13歳以上</td>
                <td class="detail">（1回接種）</td>
              </tr>
              <tr>
                <td>フルミスト<br>（経鼻インフルエンザワクチン）</td>
                <td class="detail">2歳～19歳未満</td>
                <td class="detail">（1回接種）</td>
              </tr>
              <tr>
                <td rowspan="2">HPV（ヒトパピローマウイルス）</td>
                <td class="detail">ガーダシル</td>
                <td class="detail">4価</td>
                <td>15,000円</td>
              </tr>
              <tr>
                <td class="detail">シルガード</td>
                <td class="detail">9価</td>
                <td>28,000円</td>
              </tr>
              <tr>
                <td rowspan="2">ロタウイルス</td>
                <td class="detail">ロタリックス</td>
                <td class="detail">（2回接種）</td>
                <td>12,000円</td>
              </tr>
              <tr>
                <td class="detail">ロタテック</td>
                <td class="detail">（3回接種）</td>
                <td>8,000円</td>
              </tr>
              <tr>
                <td colspan="3">肺炎球菌</td>
                <td>10,000円</td>
              </tr>
              <tr>
                <td colspan="3">五種混合（ジフテリア・破傷風・百日咳・ポリオ・ヒブ）</td>
                <td>19,000円</td>
              </tr>
              <tr>
                <td colspan="3">三種混合（ジフテリア・破傷風・百日咳）</td>
                <td>4,000円</td>
              </tr>
              <tr>
                <td colspan="3">二種混合（ジフテリア・破傷風）</td>
                <td>4,000円</td>
              </tr>
              <tr>
                <td colspan="3">不活化ポリオ</td>
                <td>8,000円</td>
              </tr>
              <tr>
                <td colspan="3">破傷風</td>
                <td>3,000円</td>
              </tr>
              <tr>
                <td colspan="3">MR（麻しん風しん混合）</td>
                <td>9,000円</td>
              </tr>
              <tr>
                <td colspan="3">水痘</td>
                <td>6,000円</td>
              </tr>
              <tr>
                <td colspan="3">おたふくかぜ</td>
                <td>4,000円</td>
              </tr>
              <tr>
                <td colspan="3">A型肝炎</td>
                <td>8,000円</td>
              </tr>
              <tr>
                <td colspan="3">B型肝炎</td>
                <td>4,000円</td>
              </tr>
              <tr>
                <td colspan="3">日本脳炎</td>
                <td>5,000円</td>
              </tr>
              <tr>
                <td colspan="3">狂犬病</td>
                <td>18,000円</td>
              </tr>
              <tr>
                <td colspan="3">髄膜炎菌</td>
                <td>25,000円</td>
              </tr>
              <tr>
                <td colspan="3">帯状疱疹（シングリックス）</td>
                <td>22,000円</td>
              </tr>
              <tr>
                <td colspan="3">BCG</td>
                <td>5,000円</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="price__block" id="section2">
        <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tanuki.png" alt="たぬき">健康診査</h2>
        <div class="scroll-hint">
          <table class="price__table">
            <thead>
              <tr>
                <th class="kinds">種類</th>
                <th>料金</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>クリニックデビュー健診</td>
                <td>0円</td>
              </tr>
              <tr>
                <td>1歳児健診</td>
                <td>4,000円</td>
              </tr>
              <tr>
                <td>入園前健診</td>
                <td>2,000円</td>
              </tr>
              <tr>
                <td>5歳児健診</td>
                <td>お問合せください</td>
              </tr>
              <tr>
                <td>公費切れの乳児健診（3歳まで）</td>
                <td>4,000円</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="price__block" id="section3">
        <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tanuki.png" alt="たぬき">各種検査</h2>
        <div class="scroll-hint">
          <table class="price__table">
            <thead>
              <tr>
                <th class="kinds">種類</th>
                <th>料金</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>血液型ABO＋Rh</td>
                <td>2,000円</td>
              </tr>
              <tr>
                <td>抗体検査（国・自治体の助成がないもの）</td>
                <td>3,000円</td>
              </tr>
              <tr>
                <td>視力検査スポットビジョンスクリーナー（健診時は無料）</td>
                <td>1,000円</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="price__block" id="section4">
        <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tanuki.png" alt="たぬき">診断書</h2>
        <div class="scroll-hint">
          <table class="price__table">
            <thead>
              <tr>
                <th class="kinds">種類</th>
                <th>料金</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>生活管理指導表（アレルギー指示書・意見書）</td>
                <td>0円</td>
              </tr>
              <tr>
                <td>診断書・証明書・主治医意見書・訪問看護指示書</td>
                <td>3,000円</td>
              </tr>
              <tr>
                <td>診断書・証明書・主治医意見書（英文）</td>
                <td>5,000円</td>
              </tr>
              <tr>
                <td>投薬指示書</td>
                <td>500円</td>
              </tr>
              <tr>
                <td>登園・登校許可書 <span class="price__comment">※1</span></td>
                <td>0円</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="price__comment">※1　登園許可証は<a href="https://www.city.itabashi.tokyo.jp/kosodate/azukeru/ninka/kyoka/index.html" target="_blank" class="txt-link">こちら</a>よりダウンロードできます。板橋区外・認可外の場合は指定の許可証をお持ちください</p>
      </section>
    </div>
  </section>
</main>
<?php get_footer(); ?>

<!-- scroll-hint -->
<link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.11/css/scroll-hint.css">
<script src="https://unpkg.com/scroll-hint@1.1.11/js/scroll-hint.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    new ScrollHint(".scroll-hint", {
      suggestiveShadow: true,
      scrollHintIconAppendClass: 'scroll-hint-icon-white',
    });
  });
</script>