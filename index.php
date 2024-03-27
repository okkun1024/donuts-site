<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="common/css/style.css">
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>

  <p class="welcome_message">ようこそ、ゲスト様(仮)</p>

  <section id="hero_section">
    <div class="hero_container">
      <img src="common/images/top_hero.jpg" alt="">
    </div>
  </section>


  <section id="topic_section">
    <div class="topic_container">
      <div class="new_product">
        <img src="common/images/summer_citrus.jpg" alt="">
        <p>サマーシトラス</p>
      </div>
      <div class="product_promotion">
        <img src="common/images/life_with_donuts.jpg" alt="">
        <p>ドーナツのある生活</p>
      </div>
    </div>
    <div class="item_list">
      <div>
        <img src="common/images/ist_product.jpg" alt="">
        <p>商品一覧</p>
      </div>
    </div>

  </section>


  <section id="introduce_section">
    <div class="introduce_container">
      <h2>philosophy</h2>
      <h3>私たちの信念</h3>
      <p class="philosophy_title">"Creating Connections"</p>
      <p class="philosophy_explain">ドーナツでつながる</p>
    </div>
  </section>

  <section id="ranking_section">
    <h2>人気ランキング</h2>

    <div class="first_second">
      <div class="first_container">
        <div class="first_icon"><span>1</span></div>
        <a href="detail-1.php"><img src="common/images/CC_donuts.jpg" alt=""></a>
        <p>CCドーナツ(5個入り)</p>
        <p>税込 \1,500円</p>
        <p><input type="submit" value="カートに入れる"></p>
      </div>
      <div class="second_container">
        <div class="second_icon"><span>2</span></div>
        <a href="#ranking_section"><img src="common/images/fruits_donuts_1.jpg" alt=""></a>
        <p>フルーツドーナツセット(12個入り)</p>
        <p>税込 \3500円</p>
        <p><input type="submit" value="カートに入れる"></p>
      </div>
    </div>

    <div class="third_fours">
      <div class="third_container">
        <div class="third_icon"><span>3</span></div>
        <a href="common/images/fruits_donuts_2.jpg"></a>
        <p>フルーツドーナツセット(14個入り)</p>
        <p>税込 \4000円</p>
      </div>
      <div class="fourth_container">
        <div class="fourth_icon"><span>4</span></div>
        <a href="#ranking_section"><img src="common/images/chocolate_delight.jpg" alt=""></a>
        <p>チョコレートデライト(5個入り)</p>
        <p>税込 \1600円</p>
      </div>
    </div>

    <div class="fifth_sixth">
      <div class="fifth_container">
        <div class="fifth_icon"><span>5</span></div>
        <a href="#ranking_section"><img src="common/images/best_selection.jpg" alt=""></a>
        <p>ベストセレクションボックス(4個入り)</p>
        <p>税込 \1200円</p>
      </div>
      <div class="sixth_container">
        <div class="sixth_icon"><span>6</span></div>
        <a href="#ranking_section"><img src="common/images/strawberry_crush.jpg" alt=""></a>
        <p>ストロベリークラッシュ(4個入り)</p>
        <p>税込 \1800円</p>
      </div>
    </div>
  </section>

  <?php require 'includes/header.php'; ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php require 'includes/footer.php'; ?>


</body>

</html>