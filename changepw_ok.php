<?php
    include './lib/include/sql_conn.php';
    
    $userid = $_POST['userid'];
    $userpw = $_POST['new_pw'];
    
    $sql = "update tb_user set userpw = md5('$userpw') where userid = '$userid'";
    $result = mysqli_query($conn, $sql);
?>
<script>
    alert('Success change Password!');
    location.href='index.php';
</script>