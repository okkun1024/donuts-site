'use strict';
// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime() {

    // ふわっ
    $('.fadeUpTrigger').each(function () { //fadeUpTriggerというクラス名が
        var elemPos = $(this).offset().top - 30; //要素より、50px上の
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('fadeUp'); // 画面内に入ったらfadeUpというクラス名を追記
        } else {
            $(this).removeClass('fadeUp'); // 画面外に出たらfadeUpというクラス名を外す
        }
    });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
    fadeAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面をスクロールをしたら動かしたい場合の記述


function fadeAnime2() {

    // ふわっ
    $('.fadeUpTrigger2').each(function () { //fadeUpTriggerというクラス名が
        var elemPos = $(this).offset().top - 30; //要素より、50px上の
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('fadeUp_2'); // 画面内に入ったらfadeUpというクラス名を追記
        } else {
            $(this).removeClass('fadeUp_2'); // 画面外に出たらfadeUpというクラス名を外す
        }
    });
}

if (window.matchMedia('(max-width: 768px)').matches) {
    $(window).on('load', function () {
        fadeAnime2(); /* アニメーション用の関数を呼ぶ*/
    });
} else {
    $(window).scroll(function () {
        fadeAnime2(); /* アニメーション用の関数を呼ぶ*/
    });
}


//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {//上から200pxスクロールしたら
        $('#page_top').removeClass('DownMove');//#page-topについているDownMoveというクラス名を除く
        $('#page_top').addClass('UpMove');//#page-topについているUpMoveというクラス名を付与
    } else {
        if ($('#page_top').hasClass('UpMove')) {//すでに#page-topにUpMoveというクラス名がついていたら
            $('#page_top').removeClass('UpMove');//UpMoveというクラス名を除き
            $('#page_top').addClass('DownMove');//DownMoveというクラス名を#page-topに付与
        }
    }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
    PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// #page-topをクリックした際の設定
$('#page_top a').click(function () {
    $('body,html').animate({
        scrollTop: 0//ページトップまでスクロール
    }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
});
