/* ----------------------------------

PC版

------------------------------------- */
window.onpageshow = function (event) {
  if (event.persisted) {
    window.location.reload();
  }
};

//画像置換
$(document).ready(function () {

  $('#top .content .inner .department li a img').hover(function () {
    $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
  }, function () {
    if (!$(this).hasClass('currentPage')) {
      $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
    }
  });
});

//スムーススクロール
$(document).ready(function () {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^=#]').click(function () {
    // スクロールの速度
    var speed = 400; // ミリ秒
    // アンカーの値取得
    var href = $(this).attr("href");
    // 移動先を取得
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を数値で取得
    var position = target.offset().top;
    // スムーススクロール
    $('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
});

// タブ切り替え
$(document).ready(function () {
  $('.p-aside__tab button').on('click', function () {
    // クリックされたボタンに-activeクラスを付与
    $(this).addClass('-active');
    // 他のボタンから-activeクラスを削除
    $(this).siblings('button').removeClass('-active');

    // コンテンツの切り替え
    if ($(this).attr('id') === 'tab__category') {
      // カテゴリタブがクリックされた場合
      $('.p-aside__content__box:first').addClass('-active');
      $('.p-aside__content__box:last').removeClass('-active');
    } else if ($(this).attr('id') === 'tab__archive') {
      // アーカイブタブがクリックされた場合
      $('.p-aside__content__box:last').addClass('-active');
      $('.p-aside__content__box:first').removeClass('-active');
    }
  });
});

// 重要なお知らせの位置調整（PC版のみ）
if (window.matchMedia('screen and (min-width: 1025px)').matches) {
  $(document).ready(function () {
    function adjustImportantPosition() {
      var $important = $('.p-important');
      var $footer = $('footer');

      if ($important.length && $footer.length) {
        var importantBottom = $important.offset().top + $important.outerHeight();
        var footerTop = $footer.offset().top;

        if (importantBottom >= footerTop) {
          $important.addClass('-bottom');
        } else {
          $important.removeClass('-bottom');
        }
      }
    }

    // 初期実行
    adjustImportantPosition();

    // ウィンドウリサイズ時にも実行
    $(window).on('resize', adjustImportantPosition);

    // スクロール時にも実行
    $(window).on('scroll', adjustImportantPosition);
  });
}

/* ----------------------------------

SP版

------------------------------------- */
if (window.matchMedia('screen and (max-width:768px)').matches) {
  //ドロワー
  $(document).ready(function () {
    $('.drawer').drawer();
    $('.drawer-menu li.dt a').on('click', function () {
      $('.drawer').drawer('close');
    });
    $('.drawer-menu li .drawer-dropdown-menu li a').on('click', function () {
      $('.drawer').drawer('close');
    });
  });

  //イラスト動かす
  $(document).ready(function () {
    $("#top .department li").removeClass("active");
    var count = 0;
    $("#top .department li").each(function (i) {
      setTimeout(function () {
        if (count < 6) {
          $("#top .department li").eq(i).addClass("active");
          count += 1;
        } else {
          $("#top .department li").removeClass("active");
        }
      }, 5000 * i);
    });
  });

} //max-width:768px