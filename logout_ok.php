<?php
    session_start();
    session_unset();
    echo "<script>alert('Logout.'); location.href='index.php';</script>";
?>