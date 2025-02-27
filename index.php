<?php
session_start();
$open_connect = 1;
require('connect.php');

if(!isset($_SESSION['id_account']) || !isset($_SESSION['role_account'])){//ถ้าไม่มีเซสชัน id_account หรือเซสชัน role_account จะถูกส่งไปหน้า login
    die(header('Location: form-login.php'));
}elseif(isset($_GET['logout'])){ //ถ้ามีการกดปุ่มออกจากระบบให้ทำการทำลายเซสชันและส่งไปหน้า login
    session_destroy();
    die(header('Location: form-login.php'));
}else{
    $id_account = $_SESSION['id_account'];
    $query_show = "SELECT * FROM account WHERE id_account = '$id_account'";
    $call_back_show = mysqli_query($connect, $query_show);
    $result_show = mysqli_fetch_assoc($call_back_show);
    $directory = 'images_account/';
    $image_name = $directory . $result_show['images_account'];
    $clear_cache = '?' . filemtime($image_name);
    $image_account = $image_name . $clear_cache;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic book</title>

    <link rel="stylesheet" href="test1.css">
</head>

<body>





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container bg">
  <div class="navBar">
    <div class="logo">
      <a href="#">
        <i class="fas fa-suitcase-rolling"></i>
      </a>
    </div>
    <div class="text">
      
      <h2>
          <a href="form-login.php" class="out">ออกจากระบบ</a>
      </h2>
  </div>
  </div>
  


  <div class="content">
    <div class="phuket" style="width:50%;">
      <div class="tnx">
        <h2><i class="fas fa-map-marker-alt"></i> สม.251</h2>
      </div>
      <div class="txt">
        <h1>Electronic </h1>
        <h1>Book</h1>
      </div>
      
    </div>
    <div class="card" style="width:50%;">
      <p><iframe style="width:700px;height:425px" src="https://anyflip.com/bookcase/fzupc"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe></p>
      

</div>
</body>
</html>