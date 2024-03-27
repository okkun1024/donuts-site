"use strict";

$(document).ready(function() {
    // ボタンがクリックされたときの動作
    $(".openbtn1").click(function() {
        $(this).toggleClass('active'); // ボタン自身にactiveクラスを付与/除去
        $("#g_nav").toggleClass('panelactive'); // ナビゲーションにpanelactiveクラスを付与/除去
    });

    // ナビゲーションのリンクがクリックされたときの動作
    $("#g_nav a").click(function() {
        $(".openbtn1").removeClass('active'); // ボタンのactiveクラスを除去
        $("#g_nav").removeClass('panelactive'); // ナビゲーションのpanelactiveクラスを除去
    });
});