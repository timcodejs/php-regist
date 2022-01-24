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
    <div id="change_wrap">
        <div>
            <h1>Change Password Form</h1>
            <form action="changepw_ok.php" method="post" name="changeform" id="change_form" onsubmit="return changepw()">
                <p><input type="text" name="userid" id="userid" placeholder="ID"></p>
                <p><input type="password" name="new_pw" placeholder="New Password"></p>
                <p><input type="password" name="new_pw_ch" placeholder="New Password Check"></p>
                <p><input type="submit" value="Change Password" class="changepw_btn"></p>
                <p class="pre_btn">Are you join? <a href="index.php">Login.</a></p>
            </form>
        </div>
    </div>
    <script src="./lib/js/changepw.js"></script>
</body>
</html>