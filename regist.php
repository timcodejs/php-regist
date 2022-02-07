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
    <div id="regist_wrap">
        <div>
            <h1>Regist Form</h1>
            <form action="regist_ok.php" method="post" name="regiform" id="regist_form" onsubmit="return sendit()">
                <p><input type="text" name="userid" id="userid" placeholder="ID"><input type="button" id="checkIdBtn" value="check" onclick="checkId()"></p>
                <p id="result">&nbsp;</p>
                <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
                <p><input type="password" name="userpw_ch" id="userpw_ch" placeholder="Password Check"></p>
                <p><input type="text" name="username" id="username" placeholder="Name"></p>
                <p><input type="text" name="userphone" id="userphone" placeholder="Phone Number 000-0000-0000"></p>
                <p><input type="text" name="useremail" id="useremail" placeholder="E-mail"></p>
                <p class="hobbystr">
                    <label for="drive">Drive <input type="checkbox" name="hobby[]" id="drive" value="Drive"></label>
                    <label for="movie">Movie <input type="checkbox" name="hobby[]" id="movie" value="Movie"></label>
                    <label for="study">Study <input type="checkbox" name="hobby[]" id="study" value="Study"></label>
                    <label for="game">Game <input type="checkbox" name="hobby[]" id="game" value="Game"></label> 
                    <label for="health">Health <input type="checkbox" name="hobby[]" id="health" value="Health"></label>
                    <label for="coding">Coding <input type="checkbox" name="hobby[]" id="coding" value="Coding"></label>
                </p>
                <p><input type="submit" value="Sin Up" class="signup_btn"></p>
                <p class="pre_btn">Are you join? <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>
    <script src="./lib/js/regist.js"></script>
</body>
</html>