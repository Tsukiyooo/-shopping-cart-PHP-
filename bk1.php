<?php
session_start();
if(!isset($_SESSION["bk1"])){
    $_SESSION["Code1"]="book1";
    $_SESSION["Name1"] = "超圖解 Arduino 互動設計入門 第3版";
    $_SESSION["Price1"] = 680;};
    header("Location:book.html");
?>