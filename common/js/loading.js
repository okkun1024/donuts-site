'use strict';
//SVGアニメーションの描画
var stroke;
stroke = new Vivus('mask', {
    start: 'manual',
    type: 'scenario-sync',
    duration: 10,
    forceRender: false,
    animTimingFunction: Vivus.EASE,
},
    function () {
        $("#mask").attr("class", "done");
    }
);

const keyName = 'loadingviewed';
const keyValue = true;

if (!sessionStorage.getItem(keyName)) {
    sessionStorage.setItem(keyName, keyValue);
    // 初回閲覧時
    $(window).on('load', function () {
        $("#splash").delay(2500).fadeOut('slow');
        $("#splash_logo").delay(2500).fadeOut('slow');
        stroke.play();
    });
} else {
}

// $(window).on('load', function () {
//     $("#splash").delay(3000).fadeOut('slow');
//     $("#splash_logo").delay(3000).fadeOut('slow');
//     stroke.play();
// });
