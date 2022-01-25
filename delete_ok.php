<?php
    session_start();
    include './lib/include/sql_conn.php';
    $userid = $_SESSION['userid'];
    $sql = "delete from tb_user where userid = '$userid'";
    $result = mysqli_query($conn, $sql);
    session_unset();
    echo "<script>alert('Delete Account Success!'); location.href='index.php';</script>";
?>