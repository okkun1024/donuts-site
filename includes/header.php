
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="common/css/reset.css">
    <!-- 必要ならば下記のCSSを追加して -->
    <link rel="stylesheet" href="common/css/common.css">
    <!-- タイトルここ -->
    <title>Header</title>
</head>

<body>
<?php session_start() ?>
    <header>
        <div class="header_container">
            <h1>
                <a href="index.php #introduce_section">
                    <img src="common/images/shop_logo.svg" alt="logo">
                </a>
            </h1>
            <div class="header_container_icon">
                <div class="header_container_icon_login">
                    <?php
                        if (isset($_SESSION['customer'])) {
                            echo '<a href="logout-input.php">';
                            echo '<img src="common/images/login_icon.svg" alt="">';
                            echo '<span>ログアウト</span>';
                            echo '</a>';
                        } else {
                            echo '<a href="login-input.php">';
                            echo '<img src="common/images/login_icon.svg" alt="">';
                            echo '<span>ログイン</span>';
                            echo '</a>';
                        }
                    ?>


                </div>
                <div class="header_container_icon_cart">
                    <a href="cart-show.php">
                        <img class="cart_icon" src="common/images/cart_icon.svg" alt="">
                        <span>カート</span>
                    </a>
                </div>
            </div>

        </div>
        <div class="delayScroll">
            <div class="openbtn1"><span></span><span></span><span></span></div>
        </div>
        <nav id="g_nav">
            <div id="g_nav_list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                <img src="common/images/shop_logo.svg" class="nav_image">
                <ul>
                    <li><a href="index.php">Top</a></li>
                    <li><a href="product.php ">商品一覧</a></li>
                    <li><a href="#">よくある質問</a></li>
                    <li><a href="#">問い合わせ</a></li>
                    <li><a href="#">当サイトのポリシー</a></li>
                </ul>
            </div>
        </nav>
        <div class="hedder_search_box">
            <form action="#" class="search_form_1">
                <button type="submit" aria-label="検索"></button>

                <label>
                    <input type="text">
                </label>
            </form>
        </div>

    </header>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="common/js/common.js"></script>
    <?php session_write_close(); ?>
</body>

</html>