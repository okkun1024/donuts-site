
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
  <link rel="stylesheet" href="common/css/common.css">
  <style>
    body{
      font-family: 'Noto Sans JP';
    }
    .logout-inp-h1{
      text-align: center;
      margin:32px 0 60px 0 ;
      color:#7F5539;
    }
    .logout-p{
      text-align: center;
      margin-bottom: 20px;
      color:#7F5539;
    }
    .logout-div{
      margin: 0 auto;
      border: 2px solid #E8C2CA;
      width:89%;
      padding: 20px 0 20px 0;
      margin-bottom:80px;
    }
    .logout-div2{
      width:53%;
      padding:23px 0;
      margin: auto;
      background-color: #7F5539;

    }
    .logout-a{
      display: block;
      text-align: center;
      color: white;
      
    }
  </style>
  <!-- タイトルここ -->
  <title>ログアウト画面</title>

  </head>

  <body>

  <?php
  require 'includes/header.php';
 ?>


<h1 class=logout-inp-h1>ログアウト</h1>
<div class=logout-div>
  <p class=logout-p>ログアウトしますか？</p>
  <div class=logout-div2>
    <a href="logout-complete.php" class=logout-a>ログアウトする</a>
  </div>
</div>
</body>

<?php
 require 'includes/footer.php';
?>

</html>