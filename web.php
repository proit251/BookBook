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
        nav {
            display: flex;
            justify-content: center;
            background: #444;
        }
        nav a {
            color: #fff;
            padding: 14px 20px;
            text-decoration: none;
            display: block;
            text-align: center;
        }
        nav a:hover {
            background: #555;
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
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Electronic book Page</h1>
        </div>

    </header>
    
    <nav>
        <a href="#home">Home</a>
        <a href="">เพิ่มเติม</a>
    </nav>
    
    <div class="container">
        <div class="main-content">
            <center><h2>ชั้นวางหนังสือของ Dek สม.251 </h2>
            <p>
                <iframe style="width:700px;height:425px" src="https://anyflip.com/bookcase/fzupc"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>
                </p>
            <a href="#contact" class="btn">Contact Us</a></center>
        </div>
    </div>
    
    <footer>
        <p>อิศวะ คนที่หล่อที่สุด</p>
    </footer>
</body>
</html>
