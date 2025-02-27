<?php
session_start();
$open_connect = 1;
require('connect.php');

if(!isset($_SESSION['id_account']) || $_SESSION['role_account'] != 'admin'){//ถ้าไม่มีเซสชัน id_account หรือเซสชัน role_account จะถูกส่งไปหน้า login
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
    <title>Beautiful Web Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .main-content {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #0056b3;
        }.out {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <header>

            
            <div class="text">
            <h2><img width ="250" height="250" 
            src="<?php echo $image_account; ?>">
    <h1>ยินดีต้อนรับคุณ <?php echo $result_show['username_account']; ?> ในฐานะ <?php echo $result_show['role_account']; ?></h1>
    <h2><a href="form-login.php" class="out">ออกจากระบบ</a></h2></h2>
        </div>


    </header>
    
    
    <div class="container">
        <div class="main-content">
            <center><h2>ชั้นวางหนังสือของ Dek สม.251 </h2>
            <p>
                <iframe style="width:700px;height:425px" src="https://anyflip.com/bookcase/fzupc"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>
                </p>
        </div>
    </div>

    
</body>
</html>
