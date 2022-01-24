<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/css/style.css">
</head>
<body>
    <div id="main_wrap">
        <div>
            <h1>Main Form</h1>
            <?php
                if(!isset($_SESSION['userid'])) {
            ?>
                <script>
                    alert('Please Login.');
                    location.href="index.php";
                </script>
            <?php
                } else {
            ?>
                <p class="login_user_id">🎉🎉🎉 Welcom <span><?=$_SESSION['username']?></span> 🎉🎉🎉</p>
                <p><img src="./lib/image/image.png" alt="imoticon"></p>
                <p class="logout_btn"><a href="logout_ok.php">Logout</a></p>
            <?php
                }
            ?>
        </div>
    </div>
    <script>
        setTimeout(() => {
            location.href='logout_ok.php';
        }, 300000);
    </script>
</body>
</html>