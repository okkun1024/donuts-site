<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="comon/css/reset.css">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="">
  <!-- タイトルここ -->
  <title>Header</title>
</head>
<body>
<header>
<div class="header_wrap">
            <!-- 開閉式メニュー -->
            <nav class="hum_menu">
                <!-- チェックボックスでメニューの開閉を操作する -->
                <input type="checkbox" class="menu_button" id="menu_button">
                <!-- アイコンになる要素 -->
                <label class="menu_icon" for="menu_button">
                    <span class="menu_bg"><span class="nav_icon"></span></span>
                </label>
                <!-- メニュー本文 -->
                <ul>
                    <li><img src="" alt="logo"></li>
                    <li><a href="">TOP</a></li>
                    <li><a href="">商品一覧</a></li>
                    <li><a href="">よくある質問</a></li>
                    <li><a href="">問い合わせ</a></li>
                    <li><a href="">当サイトのポリシー</a></li>
                </ul>
            </nav>
            <h1 class="top_h1"><img src="common/image/logo.svg" class="top_img" alt="ロゴ画像"></h1>
        </div>
</header>
</body>

</html>