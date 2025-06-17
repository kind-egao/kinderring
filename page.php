 <?php get_header(); ?>


 <?php if (is_page('news')) { ?>
   <p class="pageTitle">クリニックだより</p>
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
 <?php } else if (is_page('doctor')) { ?>

   <!--<section id="recruit" class="recruit">
        <div class="wrap">
          <div class="box">
            <h1 class="box__title">看護師さんを募集中です!</h1>
            <p class="box__txt">一緒に働く仲間を募集しています。<br class="spArea">新しく動き始めた「えがおこどもクリニック」。<br>明るいクリニックになるよう、なんでも皆で<br class="spArea">相談しながら物事を決めています。<br>小児科で子どもたちの健康を応援し、<br class="spArea">保護者の方にていねいな説明を<br class="pcArea">心がけてくださる<br class="spArea">看護師さんに来ていただきたいと思います。<br>子どもが好きで、優しい気持ちで<br class="spArea">患者さんに接してくださる方、歓迎します。<br>経験は問いません。<br class="spArea">どうぞお気軽にお問い合わせください。</p>
            <p class="box__connection">事務長 岩井 090-9382-0013</p>
          </div>
        </div>
      </section>
     recruit-->

   <section class="introduction">
     <div class="wrap">
       <h1 class="tit01 introduction__title">担当医紹介</h1>
       <p class="introduction__eyecatch"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doctor_introduction_img01.png" alt=""></p>
       <div class="doctors inner">
         <h2 class="doctors__title">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doctor_introduction_title01.png" alt="院長 渡部浩平 Kohei Watanabe,M.D." class="pcArea">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doctor_introduction_title01_sp.png" alt="院長 渡部浩平 Kohei Watanabe,M.D." class="spArea">
         </h2>
         <p class="kindergarten">ひまわりキッズガーデン（志村・城山・大原）　園医<br>前野幼稚園　園医</p>
         <dl class="history">
           <dt class="history__title">略歴</dt>
           <dd class="history__txt">広島大学医学部医学科 卒業</dd>
           <dd class="history__txt">東京都保健医療公社 豊島病院<br>
             <span>臨床研修医</span>
           </dd>
           <dd class="history__txt">東京都立大塚病院<br>
             <span>小児科・新生児科</span>
           </dd>
           <dd class="history__txt">東京都立小児総合医療センター<br>
             <span>アレルギー科・救命救急科・内分泌代謝科・皮膚科・耳鼻科</span>
           </dd>
           <dd class="history__txt">社会福祉法人同愛記念病院<br>
             <span>小児科</span>
           </dd>
           <dd class="history__txt">はっとり小児科</dd>
         </dl>
         <dl class="history">
           <dt class="history__title">資格</dt>
           <dd class="history__txt">日本小児科学会認定 小児科専門医</dd>
           <dd class="history__txt">PALS（小児二次救急処置）プロバイダー</dd>
           <dd class="history__txt">NCPR（新生児蘇生法）修了</dd>
           <dd class="history__txt">エピペン処方登録医</dd>
         </dl>
         <dl class="history">
           <dt class="history__title">所属学会</dt>
           <dd class="history__txt">日本小児科学会</dd>
           <dd class="history__txt">日本アレルギー学会</dd>
           <dd class="history__txt">日本小児アレルギー学会</dd>
           <dd class="history__txt">日本小児皮膚科学会</dd>
         </dl>
         <dl class="history">
           <dt class="history__title">趣味</dt>
           <dd class="history__txt">サッカー<br>
             <span>小学生の頃からずっとサッカーをしてきました。国内外問わず観戦に行きます。</span>
           </dd>
           <dd class="history__txt">釣り<br>
             <span>瀬戸内海、千葉沖、八丈島などへ出掛けています。</span>
           </dd>
           <dd class="history__txt">ドイツ<br>
             <span>学生時代にハノーファー医科大学（Medizinische Hochschule Hannover)へ留学しました。<br>
               今でもドイツ人医師の友人と交流があります。</span>
           </dd>
         </dl>
       </div>
       <!-- inner -->
     </div>
     <!-- wrap -->
     <div class="wrap">
       <div class="inner">
         <h2 class="doctors__title">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doctor_introduction_title02.png" alt="医師 服部拓哉（非常勤）Takuya Hattori,Ph.D." class="pcArea">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doctor_introduction_title02_sp.png" alt="医師 服部拓哉（非常勤）Takuya Hattori,Ph.D." class="spArea">
         </h2>
         <dl class="history">
           <dt class="history__title">略歴</dt>
           <dd class="history__txt">北海道大学医学部医学科 卒業</dd>
           <dd class="history__txt">帝京大学医学部付属病院 小児科</dd>
           <dd class="history__txt">はっとり小児科 院長</dd>
         </dl>
         <dl class="history">
           <dt class="history__title">資格</dt>
           <dd class="history__txt">医学博士</dd>
           <dd class="history__txt">日本小児科学会認定 小児科専門医</dd>
         </dl>
         <dl class="history">
           <dt class="history__title">所属学会</dt>
           <dd class="history__txt">日本小児科学会</dd>
         </dl>
         <dl class="history">
           <dt class="history__title">趣味</dt>
           <dd class="history__txt">西洋古典音楽</dd>
           <dd class="history__txt">日本古典芸能</dd>
         </dl>
       </div>
       <!-- inner -->
     </div>
     <!-- wrap -->
   </section>
   <!--introduction-->


 <?php } else if (is_page('flow')) { ?>
   <h1 class="tit01">受診の仕方</h1>

   <section class="about">

     <div class="wrap">
       <h2 class="tit02">インターネット予約システムについて</h2>
       <h3 class="tit03">一般診察をご希望の方</h3>
       <p class="about__txt">当日の「順番予約」をおとりください。日時を指定してのご予約はできません。</p>

       <h3 class="tit03">予約受付時間</h3>

       <dl class="reserve">
         <dt class="reserve__tit">平日</dt>
         <dt class="reserve__txt">午前の予約　7:30-12:00<br>午後の予約 14:30-18:00</dd>
       </dl>
       <dl class="reserve">
         <dt class="reserve__tit">土曜</dt>
         <dt class="reserve__txt">午前の予約　7:30-12:00<br>午後の予約 13:00-15:30</dd>
       </dl>

       <p class="about__thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_img01.png" alt=""></p>

       <p class="about__txt"><br class="spArea">予約受付時間は診療終了時間の30分前までです。<br>診療終了15分前には受付窓口にお越しください。</p>

       <h3 class="tit03">予防接種・乳幼児健診をご希望の方</h3>
       <p class="about__txt">ご希望の日時で「時間予約」をおとりください。<br>
         平日14:00-15:30の専用枠で、60日前から前日まで予約可<br>専用枠以外の時間帯をご希望の方はお電話かインターネット予約画面でご確認ください。</p>

       <p class="about__txt">当院ではインターネット予約システムを導入しております。<br>
         初診の方でもすぐにご利用できます。<br>
         専用の予約画面でメールアドレスを登録し、アカウントを作成します。<br>
         <br>予約システムから自動でメールが届きますので、<br>@smiley-reserve.jpからのメールを受信できるように<br>事前に携帯電話などの設定を行って下さい。
       </p>
       <p class="about__btn">
         <a href="https://clinic.smiley-reserve.jp/kinderring/reserve/showPeriods" target="_blank">ご予約はこちらから</a>
       </p>
     </div>
   </section>
   <!--recruit-->


   <section class="procedure">

     <div class="wrap">
       <div class="box">
         <h2 class="tit02">一般診療のご予約・受診の仕方</h2>
         <p class="box__txt">一般診療は院内での患者様の待ち時間を緩和するため、午前・午後の順番予約制となっております。時間を指定しての予約はできません。<br>予約の順番が近づいた際にお知らせメールが届きますので、速やかに当院へお越し下さい。<br>なおシステムの都合上、多少順番が前後することがあります。また、予約の順番に遅れた場合は次の方をお呼びしますので、来院後にお待ちいただくことがございます。<br>「順番が過ぎておりますので速やかにお越しください」の通知が2回届いてから30分以内に来院されない場合はお電話ください。 </p>
         <p class="box__txt"><br>（お願い）<br>
           ・インターネット予約受付時間は、診療終了時間の30分前までです。終了15分前までに受付窓口へお越しください。<br>
           ・ご予約なしで直接お越し頂いた場合も診察致しますが、ご予約の方の診察が優先されますのでご了承下さい。<br>
           ・アレルギーや発達、夜尿のご相談については順番予約ではなくお電話での事前予約をお願いしています。<br>
           ・インターネット予約方法でお困りの場合や、呼吸が苦しそう、脱水でぐったりしているなど緊急の場合はお電話でお問い合わせください。
         </p>
       </div>

       <div class="box">
         <h2 class="tit02">予防接種、乳幼児健診のご予約・受診の仕方</h2>
         <p class="box__txt">
           受診日の60日前から前日までインターネットでの予約が可能です。<br>
           平日の14:00-15:30の専用枠は「予防接種（専用枠）」または「乳幼児健診（±予防接種）」を選択してください。<br>
           平日の一般診療の時間帯や土曜日をご希望の方は「予防接種（午前・夕方）」から予約できます。<br>
           お電話でもご予約できますのでお気軽にお問合せ下さい。
         </p>
         <p class="box__txt">
           <br>（お願い）<br>
           ・ご予約をキャンセルする場合は、必ず前日までにお電話でご連絡下さい。<br>
           ・2か月のワクチンデビュー、3か月の2回目のワクチン、BCGをご希望の方は、接種に時間がかかりますので後ろの予定に余裕をもってご予約をお取りください。感染予防のためにも、15時よりも14時または14時30分の枠をお勧めしています。<br>
           ・双子やきょうだいで同時に受けたい方で、インターネット予約で枠が複数入れられない場合はお電話でお問い合わせください。<br><br>
           予防接種スケジュールについては下記サイトが参考になりますのでぜひご活用下さい。
         </p>

         <p class="box__btn"><a href="http://www.know-vpd.jp/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_img02.png" alt="know-vpd"></a></p>
       </div>

       <div class="box">
         <h2 class="tit02">アレルギー相談外来のご予約 <br class="spArea">（担当：渡部）</h2>
         <p class="box__txt">アレルギー相談外来を院長の渡部が行っています。<br>主な対象疾患は食物アレルギー、アトピー性皮膚炎(乳児湿疹)、気管支喘息、アレルギー性鼻炎などのアレルギー疾患になります。<br>院長はこれまでこども病院やアレルギー専門施設でアレルギー診療を行ってきました。<br>アトピー性皮膚炎児のスキンケア指導や、重度の食物アレルギーについて食物負荷試験の豊富な経験があり、経口免疫療法(食べて体に慣れさせる治療)を数多く行ってきました。気管支喘息についての治療はもちろん、ぜん息キャンプやぜん息児水泳教室の運営にも携わっていました。アレルギー性鼻炎については舌下免疫療法も行っています。<br>初回のアレルギー相談をご希望の方は、ゆっくりお話をお聞きしたいので、お電話でご予約下さい。<br>これまでの経過のまとめ（いつ、どういう症状が起きたか、既往・家族歴）や検査結果、お薬手帳などをお持ちの方は拝見しますので一緒にお持ち下さい。</p>
       </div>

       <div class="box">
         <h2 class="tit02">受診時にお持ちいただくもの</h2>
         <p class="box__txt">マイナ保険証または資格確認書・医療証・母子手帳・お薬手帳を受付までお持ち下さい。はっとり小児科の診察券をお持ちの方は一緒にご持参下さい。予防接種および乳幼児健診には区から配布された予診票が必要になります。お忘れの場合は実施できませんので必ずお持ちください（任意接種や自費のものを除く）。</p>
         <p class="box__thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_img03.png" alt=""></p>
       </div>


     </div>
   </section>
   <!--recruit-->

 <?php } else if (is_page('access')) { ?>

   <h1 class="tit01">診療時間</h1>
   <section id="businesshours" class="businesshours">
     <div class="inner">
       <p class="op_img">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_open_img01.png" alt="診療時間" class="pcArea">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_open_img01_sp.png" alt="診療時間" class="spArea">
       </p>
       <ul class="op_att">
         <li>予約受付時間の終了は、診療時間終了の30分前です。<br>診療終了15分前までに窓口にお越しください。</li>
         <li>一般診療時間内にも予防接種・乳幼児健診の枠がございます。<br>お電話か、インターネット予約画面でご確認ください。</li>
         <li>お子様と来院された保護者の方の診察も承っております。<br>受付時にお申し出ください。</li>
         <li>緊急で受診が必要と医師が判断した患者様につきましては優先的に診療させて頂いております。<br>電話でお問い合わせの上、予約なしで直接来院下さい。</li>
         <li>アレルギー・発達・夜尿など、相談をご希望の方は、ゆっくりお話をお聞ききしたいのでお電話でご予約下さい。</li>
       </ul>
     </div>
   </section>
   <!--businesshours-->
   <section id="access" class="access">
     <div class="inner">
       <h1 class="tit01">アクセス</h1>
       <p class="access__map"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_access_img01_190731.png" alt="マップ"></p>
       <p class="access__add">174-0063　東京都板橋区前野町3丁目31-3</p>
       <p class="access__gmap">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12949.122194408828!2d139.6927547!3d35.7684843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31a8a86b0d2ca942!2z44GI44GM44GK44GT44Gp44KC44Kv44Oq44OL44OD44KvIOWwj-WFkOenkSDjgqLjg6zjg6vjgq7jg7znp5Eg5bCP5YWQ55qu6Iaa56eR!5e0!3m2!1sja!2sjp!4v1555903497006!5m2!1sja!2sjp" frameborder="0" style="border:0" allowfullscreen></iframe>
       </p>
       <dl class="access__how">
         <dt>電車の方 </dt>
         <dd>都営地下鉄三田線「志村坂上駅」A2出口より徒歩8分<br>都営地下鉄三田線「本蓮沼駅」A3出口より徒歩10分<br>東武東上線「ときわ台駅」北口より徒歩15分</dd>
         <dt>バスの方</dt>
         <dd>ときわ台駅から国際興業バス赤羽駅西口行（赤53）乗車6分<br>「前野町三丁目」停留所下車徒歩3分</dd>


         <!--
            <dt>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/access_icon01.png" alt="駐車場のご案内"><br>駐車場のご案内</dt>
            <dd>クリニック向かい50m先（セブンイレブン隣）に<br>専用駐車場が5台ございます。<br>
              <span>入り口が分かりにくいため、お困りの際はお気軽にお問い合わせ下さい。</span></dd>
-->
       </dl>
       <h2 class="tit02">駐車場のご案内</h2>
       <p class="parking_img">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index_open_img02.png" alt="駐車場のご案内">
       </p>

       <!--           <p class="access__tel"><span>TEL</span> <a href="tel:03-5994-7250" target="_blank">03-5994-7250</a></p> -->
     </div>
     <!--access-->
   </section>
   <!--access-->

 <?php } else if (is_page('medical01')) { ?>
   <h1 class="tit01">小児科</h1>

   <section class="med01">
     <div class="wrap">

       <div class="box1">
         <div class="box1__txt">
           <h2 class="tit02">子どもと家族のえがおを、<br>医療と健康の両方から支援します</h2>
           <p>小児科医とは子供の総合医です。<br>熱・咳・鼻水などの急な症状から、便秘・おもらしなどの長引いている症状まで、あらゆる症状の診察を行っています。必要に応じて、感染症検査や血液検査を行い迅速に診断いたします。詳しい検査や専門的な治療が必要な場合は、連携する医療機関へ適切にご紹介します。</p>
         </div>
         <p class="box1__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical01_img01.png" alt=""></p>
       </div>
       <div class="box2">
         <p class="box2__txt">また、病気の子どもだけでなく健康な子ども、そしてそのご家族を含めてあらゆる相談を行います。病気のことに限らず、ちょっとした体のことや日ごろの様子でも気になることがあれば相談してください。<br>こんなこと聞いてもいいのかな〜？、と思うことでも、なんでもかまいません。<br><br>お父さん・お母さんなどご家族の方も診察しておりますので、受付時にお申し付けください。</p>
         <ul class="list">
           <li class="list__item">■発熱、ぐったりしている、機嫌が悪い</li>
           <li class="list__item">■咳、ぜーぜーしている、変な咳をしている</li>
           <li class="list__item">■鼻水・鼻づまり、めやに、耳の痛み・中耳炎</li>
           <li class="list__item">■腹痛</li>
           <li class="list__item">■嘔吐、下痢</li>
           <li class="list__item">■便秘、おしりが痛い</li>
           <li class="list__item">■おもらし、おしっこが近い、排尿痛</li>
           <li class="list__item">■伝染性疾患<br><span>(インフルエンザ・おたふくかぜ・みずぼうそう・アデノウイルス・RSウイルス・ヒトメタニューモウイルス<br>溶連菌・手足口病・ヘルパンギーナ・りんご病・マイコプラズマ・はしか・風しん・百日咳など)</span></li>
           <li class="list__item">■ひきつけ（けいれん）</li>
           <li class="list__item">■かゆみ・発疹・肌のかさつき・おむつかぶれ</li>
           <li class="list__item">■川崎病</li>
           <li class="list__item">■成長発達が気になる</li>
         </ul>
       </div>
       <div class="box3">
         <dl class="symptom">
           <dt class="symptom__tit">診察はインターネットで順番予約をお願いしております。<br>予約の方を優先しておりますが、以下のような症状がある場合はお申し出ください。</dt>
           <dd class="symptom__txt">・ぐったりしている　<br class="spArea">・嘔吐をくり返して苦しそう　<br class="spArea">・ぜーぜー呼吸が苦しそう<br>・激しい腹痛　<br class="spArea">・けいれんを起こしている</dd>
         </dl>
       </div>

     </div>


   </section>

 <?php } else if (is_page('medical02')) { ?>
   <h1 class="tit01">アレルギー科</h1>

   <section class="med01">
     <div class="wrap">
       <div class="box1">
         <div class="box1__txt">
           <p>アレルギーとは、本来なら反応しなくてもよい無害なものに対する過剰な自己防衛反応と捉えることができます。花粉や食べものは有害ではありませんが、身体がこれらを異物とみなすと、撃退しようとしてアレルギー症状を起こします。<br><br>小児の代表的なアレルギー疾患には、食物アレルギー、気管支ぜん息、アトピー性皮膚炎、アレルギー性鼻炎などがあります。これらのアレルギー性疾患は、互いに密接にかかわりあっており、単独で治療をするというよりは総合的なケアが必要になります。</p>
         </div>
         <p class="box1__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical02_img01.png" alt=""></p>
       </div>
       <div class="box2">
         <p class="box2__txt"> 年齢を経るごとに次から次へとアレルギー疾患を発症する様子を“アレルギーマーチ”と表します。 年齢によって発症するアレルギー疾患が異なることはひとつのポイントです。成長にともなって治癒することもありますが、就学や生活環境の変化によって症状が悪化したり再発したりすることもあります。アレルギーマーチの進行を食い止めるために、各段階で治療や対策をしっかり行いましょう。</p>
       </div>
     </div>
   </section>

   <section class="med03">
     <div class="wrap"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical02_img02.png" alt="">
     </div>
   </section>

   <section class="med01">
     <div class="wrap">
       <div class="box3">
         <h2 class="tit02">アレルギー相談外来を行なっています。</h2>
         <div class="box3__txt">
           <p>予約制となっておりますので、お電話でお問合せください。<br>
             初回の方はゆっくりお話を聞きますので、これまでの経過<br>
             （いつ、どういう症状が起きたか、既往・家族歴、検査結果など）をまとめて<br>
             きていただくとスムーズです。</p>
         </div>


         <h2 class="tit02">気管支喘息</h2>
         <div class="box3__txt">
           <p>気管支喘息は気道の慢性的な炎症を本態とする病気です。そのため気道の過敏性が亢進し様々な刺激で気道周囲の筋肉が収縮し気道が狭くなることで、咳や喘鳴（ぜーぜー）、呼吸困難などの症状が出現します。特有の胸部所見や長引く咳、発作の頻度や症状の経過、家族歴を確認し慎重に診断します。小学生頃からは呼吸機能検査を実施し状態を確認したり、アレルギーがあればそれを避けることで発作を予防します。日常生活に支障をきたさないことが治療の目標となります。</p>

           <p class="box3__ttl">（発作時の対応）</p>
           <p>気管支喘息発作が起きると気道が狭くなるため呼吸が苦しくなります。狭くなった気道を広げるため気管支拡張薬(内服・テープ・吸入)を使用し症状の改善を図ります。症状が強い場合はステロイドの投与や酸素投与が必要になることもあります。</p>

           <p class="box3__ttl">（平常時の対応）</p>
           <p>気管支喘息は平常時には自覚症状がありません。しかし気道の慢性的な炎症が隠れているため、発作を予防するために平常時からの治療が必要です。発作の予防のために気道の炎症を抑える抗ロイコトリエン薬や吸入ステロイドを中心とする予防薬を使用します。ハウスダストやダニ、花粉などアレルギーがある場合は抗アレルギー薬を併用することもあります。感染症や運動などが発作の誘因になることもあります。 </p>
         </div>


         <h2 class="tit02">食物アレルギー</h2>
         <div class="box3__txt">
           <p>鶏卵・乳・小麦など、特定の食材に対する免疫の過剰な反応により、皮膚症状(発赤・じんましん)や消化器症状(嘔吐・腹痛・下痢)、呼吸器症状(咳・呼吸困難)などの多彩な症状を引き起こす病気です。重篤な場合はアナフィラキシーを来すことがあり、緊急対応が必要になります。診断の補助のためアレルギー検査を行うこともありますが、偽陽性も非常に多いため、結果の解釈に注意する必要があります。</p>
           <p class="box3__ttl">（アレルギーが起こりやすい食材）</p>
           <p>・乳児期　鶏卵・乳・小麦<br>
             ・幼児期　ナッツ類・魚卵<br>
             ・学童期　果物・甲殻類・ナッツ類<br>
             ・成人　甲殻類・小麦・魚類・果物・大豆</p>
           <p><br>治療は最低限の除去にとどめ、必要以上の食事制限を避けることが重要です。食材については医師の具体的な指示のもとで摂取を試みることが推奨されています。原因食材に関しても経験のある医師のもとで症状が出ない程度に摂取を続けることでアレルギーを克服できる場合があります(経口免疫療法)。また、皮膚の状態を綺麗に保つことでアレルギーが寛解に向かいやすくなるため、アトピー性皮膚炎についても並行して治療することが重要です。</p>
         </div>



         <h2 class="tit02">アトピー性皮膚炎</h2>
         <div class="box3__txt">
           <p>アトピー性皮膚炎は、皮膚のバリア機能の低下により様々な刺激に皮膚が過敏に反応することで炎症が起き、さらに強いかゆみを生じるため掻破行動を繰り返し、さらなる皮膚のバリア機能の低下や炎症・掻破を繰り返すという悪循環に陥ってしまう慢性的な皮膚炎です。</p>
           <p>皮膚のバリア機能低下の原因にはフィラグリン遺伝子異常やその他の遺伝子異常など一部特定されていますが、日常生活における抗原や刺激物への暴露、ライフスタイルと温度や湿度などの環境因子、生活環境の影響も大きく、原因を1つに特定することは難しいとされています。症状の部位や期間、家族歴など詳細な問診をもとに診断します。</p>
           <p>治療は皮膚バリアを保つために適切なスキンケアを行うことや炎症に対するステロイド外用薬を中心に行います。皮膚炎をコントロールできていない方の多くが、スキンケアが不十分であると言われており、治療の継続のために薬剤について適切な知識を得ることやスキンケアを学ぶことが大切です。最近ではステロイド以外の新しい治療薬が承認され、炎症の原因物質をターゲットとした治療薬として、JAK阻害剤（デルゴシチヌブ）や抗体医薬品の注射薬（デュピルマブなど）が登場しています。JAK阻害剤は炎症を引き起こすシグナルをブロックする作用があり、デュピルマブは炎症性サイトカインIL-4/13を抑えることで皮膚炎の改善を図ります。治療の目標は日常生活に影響を来さない程度にコントロールすることです。</p>
         </div>

       </div>

     </div>
   </section>

 <?php } else if (is_page('medical03')) { ?>

   <h1 class="tit01">小児皮膚科</h1>

   <section class="med01">
     <div class="wrap">

       <div class="box1">
         <div class="box1__txt">
           <h2 class="tit02">赤ちゃんの頃からのスキンケアが大切です</h2>
           <p>赤ちゃんの肌は見た目がきれいでふっくらすべすべ。そんな肌を見ると「スキンケアなんて必要ないのでは？」と思われるかもしれません。でも実は、とてもデリケートなのです。赤ちゃんの皮膚は角層が薄く、バリア機能が未発達です。このため色々な刺激に弱く、カサカサして痒くなったり、赤く腫れて湿疹や皮膚炎になったりします。また、汗をかきやすいため細菌やウイルスが繁殖しやすく、感染症を引き起こすこともあります。荒れた皮膚をそのままにしておくと、ぜん息やアレルギー性鼻炎、食物アレルギーを発症するリスクが高くなります。赤ちゃんの頃から早めにスキンケアをして、皮膚をきれいに保つことが大切です。</p>
         </div>
         <p class="box1__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical03_img01.png" alt=""></p>
       </div>
       <div class="box2">
         <p class="box2__txt">お子さんによっては特有の皮膚の症状が起こることもあり、ひとりひとり特別な配慮が必要なことがあります。<br>
           <br> 当院では、お薬を処方するだけではなく、軟膏の塗り方や使用期間、日ごろからの適切なスキンケアについて指導を行っています。
           <br>
           <br>
           <br>なお、皮膚の切除や縫合などの外科的処置は行っておりませんのでご了承ください。
         </p>
         <h2 class="tit03">主な対象疾患</h2>
         <ul class="list">
           <li class="list__item">■皮膚の乾燥・かゆみ・あかみ<span>（乳児湿疹）</span></li>
           <li class="list__item">■アトピー性皮膚炎</li>
           <li class="list__item">■じんましん</li>
           <li class="list__item">■ウイルス性発疹症<span>（突発性発疹、水ぼうそう、はしか、風しんなど）</span></li>
           <li class="list__item">■とびひ<span>（伝染性膿痂疹）</span></li>
           <li class="list__item">■あせも</li>
           <li class="list__item">■虫さされ</li>
           <li class="list__item">■おむつかぶれ</li>
           <li class="list__item">■でべそ<span>（臍ヘルニア）</span></li>
           <li class="list__item">■しらみ</li>
           <li class="list__item">■水いぼ<span>（伝染性軟属腫）<br>現時点で切除を行っておりません。必要に応じて適切な皮膚科専門医をご紹介いたします。</span></li>
           <li class="list__item">■その他の発疹<span>（川崎病、紫斑病など）</span></li>
         </ul>
       </div>
     </div>
   </section>
 <?php } else if (is_page('medical04')) { ?>

   <h1 class="tit01">舌下免疫療法</h1>

   <section class="med01">
     <div class="wrap">
       <div class="box1">
         <div class="box1__txt">
           <h2 class="tit02">アレルギー性鼻炎とは</h2>
           <p>アレルギー性鼻炎は、ダニ・ハウスダストが主な原因となる通年性アレルギー性鼻炎と、スギ・ヒノキ・ハンノキ・イネ科・キク科などの植物の花粉が主な原因となる季節性のアレルギー性鼻炎（いわゆる花粉症）に大別されます。目のかゆみや鼻づまり・鼻水・くしゃみ、ときに皮膚のかゆみなどの症状が出現します。</p>
         </div>
         <p class="box1__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical04_img01.png" alt=""></p>
       </div>
       <div class="box2">
         <p class="box2__txt">小児の喘息患者の70％以上、成人の喘息患者の40％以上がアレルギー性鼻炎を合併しているといわれており、一緒に治療することが重要といわれています（逆にアレルギー性鼻炎の方が喘息を合併しているのは2-30%）。<br><br>また、花粉症の方の中には、果物を摂取することで口の中にかゆみが出現する花粉-食物アレルギー症候群（PFAS）を発症する場合があります。<br>お心あたりのある方はご相談ください。</p>
         <h2 class="tit03">診断／検査</h2>
         <p class="box2__txt">詳細な問診（季節・時間・天候・既往歴・家族歴など）、<br>血液検査、鼻汁検査</p>
         <h2 class="tit03">治療</h2>
         <p class="box2__txt">原因となる抗原の回避<br>抗アレルギー薬の内服<br>点鼻薬<br>免疫療法（舌下免疫療法）</p>
         <h2 class="tit03">舌下免疫療法</h2>
         <p class="box2__txt">症状の緩和が目的である抗アレルギー薬の内服・点鼻薬とは異なり、<br>アレルギーの原因であるアレルゲンに体を慣らすことで<br>根本的な治療を目的とするのが免疫療法です。その中でも舌下免疫療法は、<br>比較的リスクが低く簡便であり、新たな治療として広まってきています。<br>現在日本ではダニ・スギアレルゲンのみ保険適応があり、<br>2018年から5歳以上まで適応年齢が拡大されました。<br>まずは1年程度治療し、効果があれば３～5年継続することが望ましいです。</p>
       </div>
     </div>


   </section>


 <?php } else if (is_page('medical05')) { ?>
   <h1 class="tit01">予防接種</h1>

   <section class="med01">
     <div class="wrap">

       <div class="box1">
         <div class="box1__txt">
           <h2 class="tit02">はじめてのワクチンは2か月から</h2>
           <p>赤ちゃんは病気に対する抵抗力が弱く、お母さんのおなかの中にいるときに、臍帯を通じてお母さんから病気に対する免疫をもらっています。ところが、生後数カ月たつと、お母さんからもらった免疫がどんどんなくなっていきます。こわい病気になりませんように、2か月の誕生日にはワクチンをプレゼントしましょう。</p>
         </div>
         <p class="box1__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical05_img01.png" alt=""></p>
       </div>
       <div class="box2">
         <h2 class="tit02">ワクチンで社会全体を病気から守りましょう</h2>
         <p class="box2__txt">予防接種の目的は、ワクチンを打った本人を病気から守るだけではありません。「集団免疫効果」といって、みんながワクチンを打つことで、病気の流行をおさえることができます。妊娠中のお母さんや赤ちゃん、おじいちゃんやおばあちゃん、仲の良いお友達など、周りの人達を病気から守ることができるのです。今は流行していない病気でも、グローバル化にともなって人の出入りが多くなれば、感染のリスクも高まります。みんなでワクチンを打って、社会全体をこわい病気から守りましょう。</p>
       </div>

       <h3 class="tit03">定期接種（公費）・任意接種（自費）ともに各種予防接種に対応いたします。</h3>
       <div class="box3">

         <dl class="cassette">
           <dt class="cassette__tit">定期接種</dt>
           <dd class="cassette__txt">
             <p>ヒブ／肺炎球菌／B型肝炎／ロタウイルス（1価・5価）／<br>四種混合／BCG／MR（麻しん風しん）／水痘／日本脳炎／<br>二種混合／子宮頸がん</p>
           </dd>
           <dt class="cassette__tit">任意接種</dt>
           <dd class="cassette__txt">
             <p>おたふくかぜ／三種混合／不活化ポリオ／A型肝炎／狂犬病／髄膜炎菌／インフルエンザなど</p>
             <p class="cassette__att">※任意接種の予診票はダウンロードできます。<br>ただし、板橋区の費用助成があるものは専用の予診票が必要ですのでご不明な場合はお問合せください。</p>

           </dd>
         </dl>
         <ul class="btn">
           <li><a href="<?php echo esc_url(home_url('/price')); ?>">料金表</a></li>
           <li><a href="<?php echo esc_url(home_url('/questionnaire')); ?>">問診票・予診票</a></li>
         </ul>
       </div>
     </div>

     <div class="wrap2">
       <h3 class="tit03">当院おすすめのスケジュール</h3>
       <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical05_img02.png" alt=""></p>
       <div class="att">
         <p>ワクチンの接種間隔については、異なる種類の注射生ワクチン同士は27日以上の接種間隔をあけます。<br>
           同じ種類のワクチンについては個別に接種間隔の決まりがあります。詳しくはお問い合わせ下さい。<br>
           新型コロナウイルスワクチンについては個別にお問合せください。<br>
           ★1 2023年3月以前に4種混合ワクチンを接種された方は月齢3、4、5か月が接種時期となります。<br>
           ★2 日本脳炎ワクチンは流行地域に滞在する場合は6か月からの接種を推奨します。<br>
           ★3 インフルエンザワクチンは毎年10月頃から冬期のみ接種します。6か月以上13歳未満は2週間〜1か月あけて2回、13歳以上は1回接種します。</p>
         <p>2023年4月版</p>
       </div>
     </div>
   </section>

   <section class="med02">
     <div class="wrap">
       <p>こんな時はぜひご相談ください。<br>個別にご対応いたします。</p>
       <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical05_img03.png" alt=""></p>
       <ul>
         <li>・はじめてのワクチンで心配</li>
         <li>・接種の遅れや接種漏れがある</li>
         <li>・海外で暮らしていた。また暮らす予定がある</li>
         <li>・任意接種をどうするか悩んでいる</li>
       </ul>
     </div>
   </section>

   <section class="med03">
     <div class="wrap">
       <h3 class="tit03">ワクチンの予約は2か月前から、電話とインターネットで受付けております。</h3>
       <p>平日14時・14時30分・15時に予防接種専用枠を設けています。<br>平日・土曜日の一般診療（午前・午後）も予防接種を受付けていますので、<br>
         ご希望の際はお電話かインターネット予約画面でご確認ください。<br> お風邪の患者さんとなるべく一緒にならないように配慮しております。</p>
       <h3 class="tit03">お持ちいただくもの</h3>
       <ul>
         <li>●母子手帳</li>
         <li>●自治体から配布された予診票<span>（あらかじめ保護者記入欄に記載してください）</span></li>
         <li>●マイナ保険証または資格確認書・乳幼児医療証・診察券<span>（一緒に診察をしたり、処方箋を発行することができます）</span></li>
       </ul>
       <div class="banner"><a href="http://www.know-vpd.jp/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical05_img04.png" alt=""></a></div>
     </div>
   </section>
 <?php } else if (is_page('medical06')) { ?>
   <h1 class="tit01">乳幼児健診</h1>

   <section class="med01">
     <div class="wrap">
       <div class="box1">
         <div class="box1__txt">
           <p>乳幼児健診はお子さんの発育や発達を確認するためのものです。お子さんの日ごろの様子や離乳食の進め方など、子育てに関する疑問や悩みがありましたらこの機会にぜひご相談ください。<br>定期的に健康状態をチェックすることで、隠れている先天性疾患の早期発見につながることもあります。
           </p>
         </div>
         <p class="box1__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/medical06_img01.png" alt=""></p>
       </div>
       <div class="box2">
         <h2 class="tit03">乳幼児健診の内容</h2>
         <p class="box2__txt">全身の診察、身体測定による発育のチェック、月齢・年齢に相当する発達のチェック、予防接種の接種状況の確認や進め方の相談、栄養・生活指導・事故の防止指導など</p>

         <h2 class="tit03">公費で受けられる健診</h2>
         <p class="box2__txt">６〜７か月健診<span>（8か月の誕生日の前日までに）</span><br> ９〜10か月健診 <span>（11か月の誕生日の前日までに）</span><br> 1歳６か月健診 <span>（板橋区在住の方、2歳の誕生日の前日までに）</span></p>
         <ul class="att">
           <li class="att__list">※期間を過ぎると公費で受けられなくなりますので、早めに受けましょう。</li>
           <li class="att__list">※4か月健診、3歳児健診は自治体による集団健診になります。</li>
         </ul>

         <h2 class="tit03">その他の健診</h2>
         <h3 class="tit04">＜クリニックデビュー健診＞</h3>
         <p class="box2__txt">
           生まれた病院での1か月健診から自治体の4カ月健診までの間をフォローする健診で、生後1か月～2か月頃が対象です。<br>
           お子さまの健康状態を確認しながら、育児に関するさまざまな疑問にお答えします。
         </p>

         <ul class="things">
           <li class="things__list">（主な内容）</li>
           <li class="things__list">●1か月健診で聞きそびれたことの相談</li>
           <li class="things__list">●お子さんの発育・発達の確認</li>
           <li class="things__list">●スキンケア指導</li>
           <li class="things__list">●育児相談（哺乳・睡眠・便秘など）</li>
           <li class="things__list">●予防接種スケジュールの相談</li>
         </ul>
         <p class="box2__txt">
           クリニックの雰囲気を知っていただく機会にもなりますので、初めての小児科受診に不安のある方も安心してお越しください。健診費用は無料です。</p>

         <h3 class="tit04">＜5歳児健診＞</h3>
         <p class="box2__txt">
           自治体の就学前健診（毎年11月頃）は小学校入学直前のタイミングとなるため、気になることがあっても十分な対応が難しくなることがあります。5歳のお子さまを対象に、より早い時期に健康や発達を確認することで、必要なサポートにつなげることを目的としています。<br>自治体の就学前健診とは異なり、希望者のみの個別健診です。ご希望の方はお電話または受付でお問合せください。</p>
         <p class="box2__txt"><br>
           このほか、1歳児健診や入園前健診も自費で承っております。
         </p>
         <h2 class="tit03">乳幼児健診は2か月前から、電話とインターネットで予約を受付けております。</h2>
         <p class="box2__txt">乳幼児健診は2か月前から、電話とインターネットで予約を受付けております。<br>平日14時・14時30分・15時に乳幼児健診専用枠を設けています。<br>乳幼児健診と一緒にワクチンも接種できます。<br>平日・土曜日の一般診療（午前・午後）も受付可能な場合がありますので、お電話でお問合せください。</p>
         <h2 class="tit03">お持ちいただくもの</h2>
         <ul class="things">
           <li class="things__list">●母子手帳</li>
           <li class="things__list">●自治体から配布された予診票<span>（あらかじめ保護者記入欄に記載してください）</span></li>
           <li class="things__list">●マイナ保険証または資格確認書・乳幼児医療証・診察券<span>（一緒に診察をしたり、処方箋を発行することができます）</span></li>
           <li class="things__list">●おむつは新しいものにはき替えてきてください。替えのおむつ、着替え、汚れたおむつや衣類を入れるビニール袋をご持参ください。</li>
         </ul>
       </div>
     </div>


   </section>

 <?php } else if (is_page('link')) { ?>

   <h1 class="tit01">リンク</h1>
   <section class="introduce">
     <h2 class="tit02">【お役立ち情報】</h2>
     <dl>
       <dt class="introduce__tit"><a href="https://shinryukai.org/ekichika2/byogoji/" target="_blank">病児保育室　エキチカ保育園Ⅱ</a></dt>
       <dd class="introduce__link"><a href="https://shinryukai.org/ekichika2/byogoji/" target="_blank">https://shinryukai.org/ekichika2/byogoji/</a></dd>
       <dd class="introduce__txt">ときわ台駅近くの病児保育室です。北区・練馬区など板橋区以外の方も利用できます。<br>
         1歳以上で、区の病児・病後児保育の登録が済んでいる方が対象になります。<br>
         前日に当院を受診頂ければ、翌日の病児保育用の診断書を記載しています。<br>
         1日2000円(給食費500円を含む)で利用できます。 </dd>




       <dt class="introduce__tit"><a href="https://www.city.itabashi.tokyo.jp/kosodate/azukeru/myouni/index.html" target="_blank">板橋区病児・病後児保育のご案内</a></dt>
       <dd class="introduce__link"><a href="https://www.city.itabashi.tokyo.jp/kosodate/azukeru/myouni/index.html" target="_blank">https://www.city.itabashi.tokyo.jp/kosodate/azukeru/myouni/index.html </a></dd>
       <dd class="introduce__txt">板橋区の認可病児保育室、病児・病後児保育の登録についての案内です。</dd>




       <dt class="introduce__tit"><a href="http://www.city.itabashi.tokyo.jp/c_kurashi/084/084819.html" target="_blank">いたばし子育てナビアプリ</a></dt>
       <dd class="introduce__link"><a href="http://www.city.itabashi.tokyo.jp/c_kurashi/084/084819.html" target="_blank">http://www.city.itabashi.tokyo.jp/c_kurashi/084/084819.html</a></dd>
       <dd class="introduce__txt">スマートフォンに登録すると便利です。</dd>

       <dt class="introduce__tit"><a href="http://www.know-vpd.jp/" target="_blank">KNOW★VPD!</a></dt>
       <dd class="introduce__link"><a href="http://www.know-vpd.jp" target="_blank">http://www.know-vpd.jp</a></dd>
       <dd class="introduce__txt">こどものワクチン情報サイトです。</dd>


       <dt class="introduce__tit"><a href="https://www.vaccine4all.jp/" target="_blank">こどもとおとなのワクチンサイト</a></dt>
       <dd class="introduce__link"><a href="https://www.vaccine4all.jp/" target="_blank">https://www.vaccine4all.jp/</a></dd>
       <dd class="introduce__txt">おとなも含めたワクチンの情報サイトです。</dd>

       <dt class="introduce__tit"><a href="https://www.niid.go.jp/niid/ja/from-idsc.html" target="_blank">国立感染症研究所</a></dt>
       <dd class="introduce__link"><a href="https://www.niid.go.jp/niid/ja/from-idsc.html" target="_blank">https://www.niid.go.jp/niid/ja/from-idsc.html</a></dd>
       <dd class="introduce__txt">最新の感染症の流行状況や詳細情報がわかります。</dd>

       <dt class="introduce__tit"><a href="http://www.kodomo-qq.jp/" target="_blank">こどもの救急</a></dt>
       <dd class="introduce__link"><a href="http://www.kodomo-qq.jp/" target="_blank">http://www.kodomo-qq.jp/</a></dd>
       <dd class="introduce__txt">夜間や緊急時の対応方法や、小児救急電話相談(#8000)など色々な情報があります。</dd>

       <dt class="introduce__tit"><a href="https://www.j-poison-ic.jp/" target="_blank">日本中毒情報センター</a></dt>
       <dd class="introduce__link"><a href="https://www.j-poison-ic.jp/" target="_blank">https://www.j-poison-ic.jp/</a></dd>
       <dd class="introduce__txt">誤食や誤飲による中毒事故の対応がわかります。</dd>

       <dt class="introduce__tit"><a href="https://itb.tokyo.med.or.jp/index.html" target="_blank">板橋区医師会</a></dt>
       <dd class="introduce__link"><a href="https://itb.tokyo.med.or.jp/index.html" target="_blank">https://itb.tokyo.med.or.jp/index.html</a></dd>
       <dd class="introduce__txt">医師会のホームページです。休日診療などの情報があります。</dd>

       <dt class="introduce__tit"><a href="http://www.jpeds.or.jp/" target="_blank">日本小児科学会</a></dt>
       <dd class="introduce__link"><a href="http://www.jpeds.or.jp/" target="_blank">http://www.jpeds.or.jp/</a></dd>
       <dd class="introduce__txt">小児医療について標準的な指針や情報を発信しています。</dd>

       <dt class="introduce__tit"><a href="http://maki-o.com/" target="_blank">小笠原まきさんホームページ</a></dt>
       <dd class="introduce__link"><a href="http://maki-o.com/" target="_blank">http://maki-o.com/</a></dd>
       <dd class="introduce__txt">当院の壁画を描いて頂いたホスピタルアーティスト・絵本作家さんのホームページです。</dd>
     </dl>

     <h2 class="tit02">【主な紹介先病院】</h2>
     <dl>
       <dt class="introduce__tit"><a href="http://www.teikyo-hospital.jp/" target="_blank">帝京大学医学部付属病院</a></dt>
       <dd class="introduce__link"><a href="http://www.teikyo-hospital.jp/" target="_blank">http://www.teikyo-hospital.jp/</a></dd>

       <dt class="introduce__tit"><a href="http://www.med.nihon-u.ac.jp/hospital/itabashi/" target="_blank">日本大学医学部付属板橋病院</a></dt>
       <dd class="introduce__link"><a href="http://www.med.nihon-u.ac.jp/hospital/itabashi/" target="_blank">http://www.med.nihon-u.ac.jp/hospital/itabashi/</a></dd>

       <dt class="introduce__tit"><a href="http://www.toshima-hp.jp/" target="_blank">東京都保健医療公社豊島病院</a></dt>
       <dd class="introduce__link"><a href="http://www.toshima-hp.jp/" target="_blank">http://www.toshima-hp.jp/</a></dd>

       <dt class="introduce__tit"><a href="https://www.tokyokita-jadecom.jp/" target="_blank">東京北医療センター</a></dt>
       <dd class="introduce__link"><a href="https://www.tokyokita-jadecom.jp/" target="_blank">https://www.tokyokita-jadecom.jp/</a></dd>

       <dt class="introduce__tit"><a href="http://www.itabashi-med.jp/" target="_blank">板橋区医師会病院</a></dt>
       <dd class="introduce__link"><a href="http://www.itabashi-med.jp/" target="_blank">http://www.itabashi-med.jp/</a></dd>

       <dt class="introduce__tit"><a href="http://www.ncchd.go.jp/index.html" target="_blank">国立成育医療研究センター</a></dt>
       <dd class="introduce__link"><a href="http://www.ncchd.go.jp/index.html" target="_blank">http://www.ncchd.go.jp/index.html</a></dd>
     </dl>
   </section>


 <?php } else if (is_page('clinic')) { ?>

   <h1 class="tit01">院内紹介</h1>
   <section class="introduction">
     <div class="wrap">

       <div class="cal_1">
         <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img01.png" alt="外観"></figure>
         <h2 class="cal__tit">外観<span>青い看板が目印です。</span></h2>
       </div>

       <div class="cal_1">
         <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img02.png" alt="待合室"></figure>
         <h2 class="cal__tit">待合室<span>絵本やおもちゃはもちろん、ビデオもあります。いい子で待てるかな？</span></h2>
       </div>

       <div class="cal_1">
         <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img03.png" alt="診察室①"></figure>
         <h2 class="cal__tit">診察室①<span>今日はどうしたのかな？　もしもしですよ。</span></h2>
       </div>

       <div class="cal_1">
         <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img04.png" alt="診察室②"></figure>
         <h2 class="cal__tit">診察室②<span>緑のお部屋もありますよ。</span></h2>
       </div>

       <div class="cal_1">
         <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img05.png" alt="処置室"></figure>
         <h2 class="cal__tit">処置室<span>血液検査や鼻吸い・吸入をします。</span></h2>
       </div>

       <div class="cal_2">
         <div>
           <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img06.png" alt="隔離室"></figure>
           <h2 class="cal__tit">隔離室<span>他のお友達と接触しないように、ピンクのお部屋で待っててね。</span></h2>
         </div>
         <div>
           <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img07.png" alt="多機能トイレ"></figure>
           <h2 class="cal__tit">多機能トイレ<span>おむつ交換台があります。</span></h2>
         </div>
       </div>

       <h2 class="tit02">設備</h2>

       <div class="cal_3">
         <div>
           <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img08.png" alt="尿検査器"></figure>
           <h3 class="cal__tit">尿検査器</h3>
         </div>
         <div>
           <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img09.png" alt="血算・CRP測定器"></figure>
           <h3 class="cal__tit">血算・CRP測定器</h3>
         </div>
         <div>
           <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img10.png" alt="呼気一酸化窒素測定器"></figure>
           <h3 class="cal__tit">呼気一酸化窒素測定器</h3>
         </div>
         <div>
           <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img11.png" alt="吸入器（コンプレッサー式）"></figure>
           <h3 class="cal__tit">吸入器<br><span>（コンプレッサー式）</span></h3>
         </div>
         <div>
           <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img12.png" alt="吸入器（メッシュ式）"></figure>
           <h3 class="cal__tit">吸入器<br><span>（メッシュ式）</span></h3>
         </div>
         <div>
           <figure class="cal__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_img13.png" alt="鼻吸い器"></figure>
           <h3 class="cal__tit">鼻吸い器</h3>
         </div>
       </div>

     </div>
   </section>

 <?php } ?>







 <?php get_footer(); ?>