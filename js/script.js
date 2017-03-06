//スムーススクロール
$(function() {
    $('a').click(function() {
        //異動先コンテンツの位置を取得
        var target = $($(this).attr('href')).offset().top;
        //コンテンツへスクロール
        $('html, body').animate({ scrollTop: target }, 500);
        return false;
    });
});
//スムーススクロール終わり

$(function() {
    var $header = $('#top-head');
    // Nav Toggle Button
    $('#nav-toggle').click(function() {
        $header.toggleClass('open');
        $('.header-navi-shadow').toggleClass('black-shadow');
    });
});

//固定ナビゲーション
$(function() {
    var navPos = $('#eye-catch').height();
    var navPos2 = $('#page-title').height();
    $(window).scroll(function() {
        if ($(window).scrollTop() > navPos || $(window).scrollTop() > navPos2 ) {
            $('#top-head').fadeIn(300);
            $('#top-head').css({ "position": "fixed" });
        } else { $('#top-head').fadeOut(300); }
    });
});
//固定ナビゲーション終わり

//画像ホバー時エフェクト
$(function() {
    if ($(window).width() > 960) {
        //zoom percentage, 1.1 =110%
        var zoom = 1.1;

        //ホバーした時
        $('.news-block').hover(function() {

                //横幅と縦幅を取得
                width = $('.news-block').width();
                height = $('.news-block').height();


                //画像のズーム
                $(this).find('img').stop(false, true).animate({
                    'width': width * zoom,
                    'top': -60
                }, {
                    duration: 300
                });
                $(this).find('.news-cap').stop(false, true).fadeIn(300);
                $(this).find('.black-wrap').stop(false, true).fadeIn(300);
            },
            function() {
                //リセット
                $(this).find('img').stop(false, true).animate({
                    'width': width,
                    'top': 0
                }, {
                    duration: 300
                });
                $(this).find('.news-cap').stop(false, true).fadeOut(300);
                $(this).find('.black-wrap').stop(false, true).fadeOut(300);
            });
    };
});
