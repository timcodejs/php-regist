<?php
    session_start();
    include './lib/include/sql_conn.php';

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];

    $sql = "select useridx, userid, username from tb_user where userid='$userid' and userpw=md5('$userpw')";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    $flag = isset($data['userid']) ? $userid : '';

    if($flag != '') {
        $_SESSION['userid'] = $userid;
        $_SESSION['useridx'] = $data['useridx'];
        $_SESSION['username'] = $data['username'];
        echo "<script>alert('Login Success!'); location.href='main.php';</script>";
    } else {
        echo "<script>alert('Login Failed! Check your ID & Password.'); history.back();</script>";
    }
?>