$(function(){
    function fadeInOnScroll() {
      $('.fade-in').each(function() {
        const elemPos = $(this).offset().top;
        const scroll = $(window).scrollTop();
        const windowHeight = $(window).height();
  
        // 表示範囲に入ったらactiveクラスをつける
        if (scroll > elemPos - windowHeight + 100) {
          $(this).addClass('active');
        }
      });
    }
  
    $(window).on('scroll', fadeInOnScroll);
    $(window).on('load', fadeInOnScroll); // ページ読み込み時もチェック
  });
  