<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v6.5.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="common/css/style.css">
  <link rel="stylesheet" href="common/css/common.css">
  <!-- JavaScript -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script> -->
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>
  <?php
  require 'loading.php';
  ?>

  <?php
  require 'includes/header.php';
  ?>

  
  <?php
  if (isset($_SESSION['customer'])) {
    echo '<p class="welcome_message">ようこそ', ' ', $_SESSION['customer']['name'], '様</p>';
  } else {
    echo '<p class="welcome_message">ようこそ、ゲスト様</p>';
  }
  ?>
  <section id="hero_section">
    <div class="hero_container">
      <img src="common/images/top_hero.jpg" alt="">
    </div>
  </section>


  <section id="topic_section">
    <div class="topic_container">
      <div class="new_product">
        <img src="common/images/product_5.jpg" alt="">
        <p class="new_item"><img src="common/images/new_item.svg" alt=""></p>
        <p class="summer_citrus">サマーシトラス</p>
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

    <div class="items_container">
      <div class="item">
        <div class="first_icon"><span>1</span></div>
        <a href="detail-1.php"><img src="common/images/product_1.jpg" alt=""></a>
        <p class="product_name">CCドーナツ 当店オリジナル(5個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;1,500円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <div class="button_area"><input type="submit" value="カートに入れる" class="button"></div>
      </div>
      <div class="item">
        <div class="rank_icon"><span>2</span></div>
        <a href="#ranking_section"><img src="common/images/variety_1.jpg" alt=""></a>
        <p class="product_name">フルーツドーナツセット(12個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;3,500円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <div class="button_area"><input type="submit" value="カートに入れる" class="button"></div>
      </div>

      <div class="item">
        <div class="rank_icon"><span>3</span></div>
        <a href="#ranking_section"><img src="common/images/variety_2.jpg"></a>
        <p class="product_name">フルーツドーナツセット(14個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;4,000円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <div class="button_area"><input type="submit" value="カートに入れる" class="button"></div>
      </div>
      <div class="item">
        <div class="rank_icon"><span>4</span></div>
        <a href="#ranking_section"><img src="common/images/product_2.jpg" alt=""></a>
        <p class="product_name">チョコレートデライト(5個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;1,600円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <div class="button_area"><input type="submit" value="カートに入れる" class="button"></div>
      </div>

      <div class="item">
        <div class="rank_icon"><span>5</span></div>
        <a href="#ranking_section"><img src="common/images/variety_3.jpg" alt=""></a>
        <p class="product_name">ベストセレクションボックス(4個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;1,200円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <div class="button_area"><input type="submit" value="カートに入れる" class="button"></div>
      </div>

      <div class="item">
        <div class="rank_icon"><span>6</span></div>
        <a href="#ranking_section"><img src="common/images/product_6.jpg" alt=""></a>
        <p class="product_name">ストロベリークラッシュ(4個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;1,800円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <div class="button_area"><input type="submit" value="カートに入れる" class="button"></div>
      </div>
    </div>

  </section>


  <?php require 'includes/footer.php'; ?>
</body>

</html>