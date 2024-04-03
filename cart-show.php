<?php require 'includes/header.php';?>
<style>
  div {
    display: flex;
  }
</style>

<div class="cart_pankuzu">
  <span><a href="">Top</a></span>
  <span>></span>
  <span>カート</span>
</div>


<?php
if(isset($_SESSION['customer'])){
  echo 'ようこそ',$_SESSION['customer']['name'],'様';
}else{
 echo 'ようこそゲスト様';
}



?>



<?php require 'includes/footer.php'; ?>
