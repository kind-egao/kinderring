/* ----------------------------------

PC版

------------------------------------- */
window.onpageshow = function(event) {
	if (event.persisted) {
		 window.location.reload();
	}
};

//画像置換
$(document).ready(function() {

  $('#top .content .inner .department li a img').hover(function() {
    $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
  }, function() {
    if (!$(this).hasClass('currentPage')) {
      $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
    }
  });
});

//スムーススクロール
$(document).ready(function() {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^=#]').click(function() {
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


/* ----------------------------------

SP版

------------------------------------- */
if (window.matchMedia('screen and (max-width:768px)').matches) {
  //ドロワー
  $(document).ready(function() {
    $('.drawer').drawer();
    $('.drawer-menu li.dt a').on('click', function() {
      $('.drawer').drawer('close');
    });
    $('.drawer-menu li .drawer-dropdown-menu li a').on('click', function() {
      $('.drawer').drawer('close');
    });
  });

  //イラスト動かす
  $(document).ready(function() {
    $("#top .department li").removeClass("active");
    var count = 0;
    $("#top .department li").each(function(i) {
      setTimeout(function() {
        if(count < 6){
          $("#top .department li").eq(i).addClass("active");
          count += 1;
        }else{
          $("#top .department li").removeClass("active");
        }
      }, 5000 * i);
    });
  });

}//max-width:768px
