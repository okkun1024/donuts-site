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

// 動きのきっかけの起点となるアニメーションの名前を定義
function moveAnimation() {

    //読み込まれたらすぐにランダムに出現	
    var randomElm = $(".randomBox");//親要素取得
    var randomElmChild = $(randomElm).children();//親の子要素を取得
    if (!$(randomElm).hasClass("play")) {	//親要素にクラス名playが付いてなければ処理をおこなう
        randomAnime();
    }

    function randomAnime() {
        $(randomElm).addClass("play");//親要素にplayクラスを付与
        var rnd = Math.floor(Math.random() * randomElmChild.length); //配列数からランダム数値を取得
        var moveData = "fadeSlide";//アニメーション名＝CSSのクラス名を指定
        $(randomElmChild[rnd]).addClass(moveData);//アニメーションのクラスを追加
        randomElmChild.splice(rnd, 1);//アニメーション追加となった要素を配列から削除
        if (randomElmChild.length == 0) {//配列の残りがあるか確認
            $(randomElm).removeClass("play");//なくなった場合は親要素のplayクラスを削除
        } else {
            setTimeout(function () { randomAnime(); }, 500);	//0.5秒間隔でアニメーションをスタートさせる。※ランダムのスピード調整はこの数字を変更させる	
        }

    }

    //スクロールしたらランダムに出現	
    var randomElm2 = $(".randomScroll");//親要素取得
    var randomElm2Child = $(randomElm2).children();	//親の子要素を取得
    randomScrollAnime();
    function randomScrollAnime() {
        var elemPos = $(".randomScroll").offset().top - 50;//要素より、50px上まで来たら
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            if (randomElm2Child.length > 0) { //配列数以上であれば処理をおこなう
                var rnd = Math.floor(Math.random() * randomElm2Child.length);//配列数から表示する数値をランダムで取得
                var moveData = "fadeSlide";//アニメーション名＝CSSのクラス名を指定
                if (animeFlag) {//スクロールする度に動作するのでアニメーションが終わるまで処理をさせないようにする
                    animeFlag = false;//アニメーション処理が終わるまで一時的にfalseにする
                    $(randomElm2Child[rnd]).addClass(moveData);//アニメーションのクラスを追加
                    setTimeout(function () {
                        animeFlag = true;//次の処理をおこなうためにtrueに変更
                        randomScrollAnime();//自身の処理を繰り返す
                    }, 300);	//0.5秒間隔で。※ランダムのスピード調整はこの数字を変更させる
                    randomElm2Child.splice(rnd, 1);//アニメーション追加となった要素を配列から削除
                }
            }

        } else {
            animeFlag = true;
        }

    }
}

var animeFlag = true;//スクロールする度に動作するのでアニメーションが終わるまで処理をさせないようにするための定義

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
    moveAnimation();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述