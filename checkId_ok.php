<?php
    include './lib/include/sql_conn.php';

    $userid = $_GET['userid'];
    $sql = "select useridx from tb_user where userid='$userid'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    echo isset($data['useridx']) ? "X" : "O";
?>