<?php
session_start();
if(!isset($_SESSION["bk2"])){
    $_SESSION["Code2"]="book2";
    $_SESSION["Name2"] = "第一次學 Python 就上手！";
    $_SESSION["Price2"] = 480;};
    header("Location:book.html");
?>