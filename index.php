<?php session_start() ?>
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

  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>
  <section id="loading_section">
    <div id="splash">
      <div id="splash_logo">
        <svg version="1.1" id="mask" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
          <style type="text/css">
            .st0 {
              fill: #4C4B4C;
            }

            .st1 {
              fill: #9B3990;
            }

            .st2 {
              fill: #76B32B;
            }

            .st3 {
              fill: #7B5439;
            }
          </style>
          <g>
            <path class="st0" d="M24.9,82.2c-7.7,0-14,6.3-14,14c0,7.7,6.3,14,14,14c7.7,0,14-6.3,14-14C38.9,88.4,32.6,82.2,24.9,82.2z
       M30.3,94.7c0,2.8-2.4,5.1-5.4,5.1c-3,0-5.4-2.3-5.4-5.1c0-2.8,2.4-5.1,5.4-5.1C27.8,89.7,30.3,91.9,30.3,94.7z M14.4,91.8
      c0.9-2.8,3.1-5,5.8-6.1c0.3-0.1,0.6,0,0.8,0.3c0.1,0.3,0,0.6-0.3,0.8c-2.4,1-4.3,2.9-5.1,5.4c-0.1,0.3-0.4,0.5-0.7,0.4
      C14.5,92.4,14.3,92.1,14.4,91.8z M24.9,108.4c-5.1,0-9.5-3.2-11.3-7.6c0.5,0.5,1.2,0.9,1.9,0.9c2.5,0.2,1.5,3.5,4.4,3.1
      c4.1-0.5,2.8,1.5,5.1,1.5c2.3,0,1-1.8,5.1-1.5c2.6,0.2,1.2-3.2,4.4-3.1c0.6,0,1.2-0.2,1.7-0.6c0.1-0.3,0.3-0.5,0.4-0.8
      C34.7,105,30.2,108.4,24.9,108.4z" />
          </g>
          <g>
            <path class="st1" d="M59.3,89.2c0,2-1.1,3.4-2.6,3.4c-1.1,0-1.9-0.6-1.9-1.6c0-1.6,1.8-1.5,1.8-3c0-0.9-0.8-1.2-1.8-1.2
      c-3.9,0-7.6,5.9-7.6,12.6c0,3.3,2.2,4.9,5,4.9c2,0,3.6-1.4,4.4-2.3c0.3-0.4,0.6-0.6,0.9-0.6s0.5,0.2,0.5,0.4c0,0.3-0.2,0.6-0.4,1.1
      c-0.9,1.7-4.1,5.4-8.8,5.4c-4.8,0-8-2.3-8-8.1c0-8.7,6.9-15.6,13.3-15.6C57.1,84.7,59.3,86.2,59.3,89.2z" />
            <path class="st1" d="M63,103.9c1,0,1.5,0.7,1.5,1.6c0,1.2-1.1,2.6-2.7,2.6c-0.9,0-1.5-0.7-1.5-1.7C60.5,105.3,61.6,103.9,63,103.9z
      " />
            <path class="st2" d="M86,89.2c0,2-1.1,3.4-2.6,3.4c-1.1,0-1.9-0.6-1.9-1.6c0-1.6,1.8-1.5,1.8-3c0-0.9-0.8-1.2-1.8-1.2
      c-3.9,0-7.6,5.9-7.6,12.6c0,3.3,2.2,4.9,5,4.9c2,0,3.6-1.4,4.4-2.3c0.3-0.4,0.6-0.6,0.9-0.6s0.5,0.2,0.5,0.4c0,0.3-0.2,0.6-0.4,1.1
      c-0.9,1.7-4.1,5.4-8.8,5.4c-4.8,0-8-2.3-8-8.1c0-8.7,6.9-15.6,13.3-15.6C83.7,84.7,86,86.2,86,89.2z" />
            <path class="st2" d="M89.7,103.9c1,0,1.5,0.7,1.5,1.6c0,1.2-1.1,2.6-2.7,2.6c-0.9,0-1.5-0.7-1.5-1.7
      C87.1,105.3,88.2,103.9,89.7,103.9z" />
            <path class="st3" d="M106.2,90.3c0.6-2.4,1.8-3.1,2.8-3.8c-5.1,0.3-8.7,3.6-8.7,6c0,1.1,0.6,1.7,1.6,1.7c0.5,0,1.1-0.2,1.3-0.2
      c0.3,0,0.4,0.2,0.4,0.4c0,0.9-2.2,3.6-5.3,3.6c-2.4,0-4.1-1.4-4.1-3.9c0-5.4,8.2-9.3,16.8-9.3c6.2,0,11.5,2.4,11.5,8.9
      c0,2.9-0.3,5.2-1.3,7.4c-2,4.7-5.7,7-9.7,7c-2.6,0-4.8-1.2-5.5-1.2c-0.9,0-2.9,1.2-3.9,1.2c-0.4,0-0.6-0.2-0.6-0.4
      c0-0.4,0.6-0.6,1.3-2.4C103.2,103.7,105.1,94.1,106.2,90.3z M113.3,86.7c-0.6,0.7-1.1,1.7-1.8,3.8c-1.3,4.1-3,13.2-3,14.2
      c0,0.9,0.6,1.4,1.6,1.4c2.3,0,4.2-2.3,5.3-5.4c0.8-2.4,1.2-5,1.2-8C116.7,88.5,115.1,87,113.3,86.7z" />
            <path class="st3" d="M135.7,100.9c0,3.9-2.7,7.3-7.5,7.3c-3.4,0-5.7-1.7-5.7-4.6c0-3.4,3-6.8,8.3-6.8
      C133.7,96.8,135.7,98.5,135.7,100.9z M132,101.6c-1.2-0.4-1.5-0.8-1.5-1.4c0-0.9,0.6-1.2,0.6-1.4c0-0.2-0.1-0.3-0.3-0.3
      c-0.2,0-0.6,0.1-1.1,0.5c-1,0.7-1.9,2-1.9,4c0,1.6,1,2.6,2.5,2.6s2.6-1.4,2.6-2.6C132.8,102.4,132.6,101.9,132,101.6z" />
            <path class="st3" d="M144.8,105.3c0-2.1,1.2-3.5,1.2-4.9c0-0.6-0.3-0.9-0.9-0.9c-0.6,0-1.6,0.6-2.4,2.1c-0.6,1.2-1.7,4.1-1.7,5.5
      c0,0.6-0.3,0.7-0.9,0.7c-1.1,0-2.7,0.2-3.2,0.2c-0.5,0-0.8-0.2-0.8-0.8c0-1.3,1.6-6,1.6-7.8c0-0.6-0.3-0.6-0.3-1.1
      c0-0.8,2.1-1.3,4.4-1.3c0.9,0,1.3,0.3,1.3,0.9c0,0.6-0.3,1.6-0.3,1.6c0.7-0.8,3-2.5,5.3-2.5c2.1,0,3,0.9,3,2.2
      c0,1.6-1.1,3.3-1.1,4.8c0,0.9,0.6,1.2,1.2,1.2c0.6,0,1-0.3,1.5-0.7c0.3-0.2,0.4-0.4,0.6-0.4c0.3,0,0.6,0.3,0.6,0.5
      c0,0.4-0.3,0.6-0.6,1.1c-0.8,0.9-2.5,2.3-4.9,2.3C146.2,108,144.8,106.8,144.8,105.3z" />
            <path class="st3" d="M161.7,105.9c0,0-2.4,2.1-5.8,2.1c-1.9,0-3.1-1.2-3.1-2.7c0-2.2,1.3-4.7,1.3-6c0-0.6-0.3-0.6-0.3-1.1
      c0-0.8,2.1-1.3,4.4-1.3c0.9,0,1.3,0.3,1.3,0.9c0,1.6-1.5,3.9-1.5,6.5c0,0.5,0.4,0.9,1,0.9c0.9,0,1.8-0.6,2.4-1.4
      c0.9-1.4,1.4-3.1,1.4-4.4c0-0.6-0.3-0.6-0.3-1.1c0-0.8,2.1-1.3,4.4-1.3c0.9,0,1.3,0.3,1.3,0.9c0,1.4-1.4,4.1-1.4,5.9
      c0,0.9,0.6,1.4,1.2,1.4c0.6,0,1-0.3,1.5-0.7c0.3-0.2,0.4-0.4,0.6-0.4c0.3,0,0.6,0.3,0.6,0.5c0,0.4-0.3,0.6-0.6,1.1
      c-0.8,0.9-2.4,2.3-4.8,2.3C162,108,161.7,105.9,161.7,105.9z" />
            <path class="st3" d="M175.6,99.8c-0.3,1-0.8,2.8-0.8,3.9c0,1,0.6,1.4,1.5,1.4c0.8,0,1.5-0.6,2.2-1.1c0.3-0.2,0.5-0.4,0.7-0.4
      c0.3,0,0.5,0.2,0.5,0.4c0,0.2-0.1,0.4-0.3,0.7c-1,1.2-3.6,3.2-6,3.2c-2.8,0-3.9-1.5-3.9-3.3c0-2.3,1.2-4,1.2-5.8
      c0-0.4-1.1-0.2-1.1-0.8c0-0.4,0.3-1,0.6-1c2,0,3.9-1.8,4.9-3.3c0.4-0.6,0.7-0.8,1.1-0.8c0.4,0,0.6,0.3,0.6,0.6
      c0,0.8-0.6,2.2-0.6,2.8c0,0.4,0.2,0.7,1.3,0.7c0.3,0,0.6,0.1,0.6,0.4c0,0.7-0.4,1.2-0.9,1.2C176.3,98.7,175.9,98.9,175.6,99.8z" />
            <path class="st3" d="M181.6,104.6c0,0.9,0.3,1.4,1.1,1.4c0.6,0,0.9-0.3,0.9-0.9c0-2.1-3.9-2.4-3.9-5c0-2.2,2.4-3.3,5.4-3.3
      c2.8,0,4.1,0.9,4.1,2.4c0,0.9-0.6,1.7-1.8,1.7c-0.7,0-1.4-0.5-1.4-1.2c0-0.5,0.3-0.7,0.3-1c0-0.4-0.3-0.5-0.7-0.5
      c-0.5,0-1.1,0.5-1.1,1.2c0,2.1,4.3,2.3,4.3,4.9c0,2.3-2,3.8-5.4,3.8c-2.9,0-5-1.2-5-3.1c0-1.1,0.9-1.7,1.8-1.7
      C181,103.2,181.6,103.8,181.6,104.6z" />
          </g>
        </svg>
        <!--/splash_logo-->
      </div>
      <!--/splash-->
    </div>
  </section>

  <?php
  require 'includes/header.php';
  ?>
  <?php
  if (isset($_SESSION['customer'])) {
    echo '<p class="welcome_message">ようこそ', ' ', $_SESSION['customer']['name'], '様</p>';
  } else {
    echo '<p class="welcome_message">ようこそ、ゲスト様(仮)</p>';
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
        <img src="common/images/summer_citrus.jpg" alt="">
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

    <div class="first_second sp_only">
      <div class="first_container">
        <div class="first_icon"><span>1</span></div>
        <a href="detail-1.php"><img src="common/images/CC_donuts.jpg" alt=""></a>
        <p class="product_name">CCドーナツ 当店オリジナル(5個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;1,500円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <p><input type="submit" value="カートに入れる" class="button"></p>
      </div>
      <div class="second_container">
        <div class="rank_icon"><span>2</span></div>
        <a href="#ranking_section"><img src="common/images/fruits_donuts_1.jpg" alt=""></a>
        <p class="product_name">フルーツドーナツセット(12個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;3,500円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <p><input type="submit" value="カートに入れる" class="button"></p>
      </div>
    </div>

    <!-- SP版ランキング表示 -->
    <div class="third_fourth sp_only">
      <div class="third_container">
        <div class="rank_icon"><span>3</span></div>
        <a href="#ranking_section"><img src="common/images/fruits_donuts_2.jpg"></a>
        <p class="product_name">フルーツドーナツセット(14個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;4,000円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <p><input type="submit" value="カートに入れる" class="button"></p>
      </div>
      <div class="fourth_container">
        <div class="rank_icon"><span>4</span></div>
        <a href="#ranking_section"><img src="common/images/chocolate_delight.jpg" alt=""></a>
        <p class="product_name">チョコレートデライト(5個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;1,600円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <p><input type="submit" value="カートに入れる" class="button"></p>
      </div>
    </div>

    <div class="fifth_sixth ">
      <div class="fifth_container">
        <div class="rank_icon"><span>5</span></div>
        <a href="#ranking_section"><img src="common/images/best_selection.jpg" alt=""></a>
        <p class="product_name">ベストセレクションボックス(4個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;1,200円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <p><input type="submit" value="カートに入れる" class="button"></p>
      </div>
      <div class="sixth_container">
        <div class="rank_icon"><span>6</span></div>
        <a href="#ranking_section"><img src="common/images/strawberry_crush.jpg" alt=""></a>
        <p class="product_name">ストロベリークラッシュ(4個入り)</p>
        <div class="price_container">
          <p class="product_price">税込 &yen;1,800円</p>
          <p><i class="fa-regular fa-heart"></i></p>
        </div>
        <p><input type="submit" value="カートに入れる" class="button"></p>
      </div>

      <!-- PC版ランキング表示 -->
      <div class="first_third pc_only">
        <div class="first_container">
          <div class="first_icon"><span>1</span></div>
          <a href="detail-1.php"><img src="common/images/CC_donuts.jpg" alt=""></a>
          <p class="product_name">CCドーナツ 当店オリジナル(5個入り)</p>
          <div class="price_container">
            <p class="product_price">税込 &yen;1,500円</p>
            <p><i class="fa-regular fa-heart"></i></p>
          </div>
          <p><input type="submit" value="カートに入れる" class="button"></p>
        </div>
        <div class="second_container">
          <div class="rank_icon"><span>2</span></div>
          <a href="#ranking_section"><img src="common/images/fruits_donuts_1.jpg" alt=""></a>
          <p class="product_name">フルーツドーナツセット(12個入り)</p>
          <div class="price_container">
            <p class="product_price">税込 &yen;3,500円</p>
            <p><i class="fa-regular fa-heart"></i></p>
          </div>
          <p><input type="submit" value="カートに入れる" class="button"></p>
        </div>
        <div class="third_container">
          <div class="rank_icon"><span>3</span></div>
          <a href="#ranking_section"><img src="common/images/fruits_donuts_2.jpg"></a>
          <p class="product_name">フルーツドーナツセット(14個入り)</p>
          <div class="price_container">
            <p class="product_price">税込 &yen;4,000円</p>
            <p><i class="fa-regular fa-heart"></i></p>
          </div>
          <p><input type="submit" value="カートに入れる" class="button"></p>
        </div>
      </div>


      <div class="fourth_sixth pc_only">
        <div class="fourth_container">
          <div class="rank_icon"><span>4</span></div>
          <a href="#ranking_section"><img src="common/images/chocolate_delight.jpg" alt=""></a>
          <p class="product_name">チョコレートデライト(5個入り)</p>
          <div class="price_container">
            <p class="product_price">税込 &yen;1,600円</p>
            <p><i class="fa-regular fa-heart"></i></p>
          </div>
          <p><input type="submit" value="カートに入れる" class="button"></p>
        </div>
        <div class="fifth_container">
          <div class="rank_icon"><span>5</span></div>
          <a href="#ranking_section"><img src="common/images/best_selection.jpg" alt=""></a>
          <p class="product_name">ベストセレクションボックス(4個入り)</p>
          <div class="price_container">
            <p class="product_price">税込 &yen;1,200円</p>
            <p><i class="fa-regular fa-heart"></i></p>
          </div>
          <p><input type="submit" value="カートに入れる" class="button"></p>
        </div>
        <div class="sixth_container">
          <div class="rank_icon"><span>6</span></div>
          <a href="#ranking_section"><img src="common/images/strawberry_crush.jpg" alt=""></a>
          <p class="product_name">ストロベリークラッシュ(4個入り)</p>
          <div class="price_container">
            <p class="product_price">税込 &yen;1,800円</p>
            <p><i class="fa-regular fa-heart"></i></p>
          </div>
          <p><input type="submit" value="カートに入れる" class="button"></p>
        </div>
      </div>

  </section>


  <?php require 'includes/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="common/js/loading.js"></script>
  <script src="common/js/comon.js"></script>
</body>

</html>