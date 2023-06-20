<?php
    session_start();
    $userid = $_SESSION["id"];
    $commentid = $_POST["deleteid"];

    $con = mysqli_connect('localhost', 'root', '', 'valo', 3306);
    $con->query("DELETE FROM `forum` WHERE id=$commentid");
    header("Location: ../discussion.php");
?>