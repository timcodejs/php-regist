<?php
    include './lib/include/sql_conn.php';

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    $username = $_POST['username'];
    $userphone = $_POST['userphone'];
    $useremail = $_POST['useremail'];
    $userhobby = $_POST['hobby'];
    $hobbystr = $userhobby[0];
    for ($i=1; $i < count($userhobby); $i++) { 
        $hobbystr .= ", ".$userhobby[$i];
    }
    
    $sql = "insert into tb_user (userid, userpw, username, userphone, useremail, userhobby) values('$userid', md5('$userpw'), '$username', '$userphone', '$useremail', '$hobbystr')";
    $result = mysqli_query($conn, $sql);
    
    setcookie("joinid", $userid, time()+60*5, "/");
?>
<script>
    alert('Success Sign Up! Welcome~!');
    location.href='index.php';
</script>