<?php
session_start();
if(!isset($_SESSION["cd2"])){
    $_SESSION["Code4"]="cd2";
    $_SESSION["Name4"] = "李千娜 / 愛 到站了";
    $_SESSION["Price4"] = 459;};
    header("Location:cd.html");
?>