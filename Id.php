<?php
session_start();

if(!isset($_SESSION['Name']) ){
    $_SESSION["Name"] = array();
    $_SESSION["Code"]= array();
    $_SESSION["Price"]= array();
}

//session_destroy();//砍掉

        if(isset($_GET["id"])){
            $id = $_GET["id"];
            //$_SESSION["id"] = '';
        }
        switch ($id) {
        case "1":
            //$_SESSION["book"] = array();

            // $_SESSION["Name"][] = "超圖解 Arduino 互動設計入門 第3版";
            // $_SESSION["Price"][] = 680;
            //print_r($_SESSION["book"]);
            header("Location:book.html");
            break;
        case "2":
            //$_SESSION["id"] .= "第一次學 Python 就上手！".'480'."";
                $_SESSION["Name"][] = "第一次學 Python 就上手！";
                $_SESSION["Price"][] = 480;
                print_r($_SESSION["Name"]);
                print_r($_SESSION["Price"]);

            //header("Location:book.html");
            break;
        case "3":
            //   $_SESSION["Name"] = "LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)";
            //   $_SESSION["Price"] = 328;
            header("Location:cd.html");
            break;   
            case "4":
            // $_SESSION["Name"] = "李千娜 / 愛 到站了";
            // $_SESSION["Price"] = 459;
            header("Location:cd.html");
            break;   
    }
    
?>
