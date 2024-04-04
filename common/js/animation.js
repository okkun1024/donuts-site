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
    $('.fadeUpTrigger_2').each(function () { //fadeUpTriggerというクラス名が
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

if (window.matchMedia("(min-width: 768px)").matches) {
    $(window).scroll(function () {
        fadeAnime2(); /* アニメーション用の関数を呼ぶ*/
    }); // ここまで画面をスクロールをしたら動かしたい場合の記述
} else {
    $(window).on('load', function () {
        fadeAnime2();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
}