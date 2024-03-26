<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common/css/reset.css">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="">
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>

  <section id="hero_section">
    <div class="hero_container">
      <img src="common/images/top_hero.jpg" alt="">
    </div>
  </section>


  <section id="topic_section">
    <div class="topic_container">
      <div class="new_product">
        <p>サマーシトラス</p>
      </div>
      <div class="product_promotion">
        <p>ドーナツのある生活</p>
      </div>
      <div class="item_list">
        <p>商品一覧</p>
      </div>
    </div>
  </section>


  <section id="introduce_section">
    <div class="introduce_container">
      <img src="common/images/introduce_background.jpg" alt="">
      <h2>philosophy</h2>
      <h3>私たちの信念</h3>
      <p>"Creating Connections"</p>
      <p>ドーナツでつながる</p>
    </div>
  </section>

  <section id="ranking_section">
    <div class="first_container">
      <p><?php $price ?></p>
    </div>
    <div class="second_container"></div>
    <div class="third_container"></div>
    <div class="fourth_container"></div>
    <div class="fifth_container"></div>
    <div class="sixth_container"></div>
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