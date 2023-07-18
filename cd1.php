<?php
session_start();
if(!isset($_SESSION["cd1"])){
    $_SESSION["Code3"]="cd1";
    $_SESSION["Name3"] = "LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)";
    $_SESSION["Price3"] = 328;};
    header("Location:cd.html");
?>