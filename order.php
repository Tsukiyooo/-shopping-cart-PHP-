<table border="1">
<?php
    echo "<tr align=center><td colspan=4>您購買的商品如下</td></tr>";
    echo "<tr><td> 項次 </td><td>產品代號</td><td>產品名稱</td><td>價格</td></tr>" ;
    session_start();
    
    $id=$_SESSION["id"];
            $j=0;
    $name=array();
    $code=array();
    $print=array();

    switch ($id) {

        case "1":
        
         $_SESSION["Code"] ="bk1";
         $_SESSION["Name"] = "超圖解 Arduino 互動設計入門 第3版";
         $_SESSION["Price"] = 680 ;
           break;
        case "2":
            "<tr><td>". $_SESSION["Code"] ="bk2". "</td>";
            "<td>" .$_SESSION["Name"] = "第一次學 Python 就上手！". "</td>";
            "<td>" .$_SESSION["Price"] = 480 . "</td></tr>";
           break;
        case "3":
            $_SESSION["Code"] ="cd1";
            $_SESSION["Name"] = "LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)";
            $_SESSION["Price"] = 328 ;
           break;   
           case "4":
            "<tr><td>".$_SESSION["Code"] ="cd2". "</td>";
            "<td>" .$_SESSION["Name"] = "李千娜 / 愛 到站了". "</td>";
            "<td>" .$_SESSION["Price"] = 459 . "</td></tr>";
             break;   
     }  
     print_r($id);
    //  for($a=0;$a<=count($name);$a++){
    //     if(isset($_SESSION["Code"])){
    //         $j=$j+1;
    //     echo "<tr><td>" . $j . "</td>";
    //     echo "<td>" . $code=$_SESSION["Code"] . "</td>";
    //     echo"<td>". $name=$_SESSION["Name"]. "</td>";
    //     echo "<td>" . $print=$_SESSION["Print"] . "</td></tr>";
    // };
    // };
    // print_r($ID)  ;
    // print_r($name)  ;
    // print_r($price)  ;
    //print_r($ID);
    // $j=0;
    // $price=0;
    // $total=0;
    // for($i=0;$i<=4;$i++){
    //     if(isset($_SESSION["Code".$i])){
    //         $j=$j+1;
    //         echo "<tr><td>" .$j. "</td>";
    //         echo "<td>" .$_SESSION["Code".$i]. "</td>";
    //         echo "<td>" .$_SESSION["Name".$i]. "</td>";
    //         echo "<td>" .$_SESSION["Price".$i]. "</td></tr>";
    //         $price=$_SESSION["Price".$i];
    //         $total=$total+$price;
    //     }
    // }echo "<tr align=right><td colspan=4>總金額=" .$total. "</td></tr>";
    // <!-- 程式範例：savecart.php -->
// if ( isset($_SESSION["Id"]) ) {
//    $id = $_SESSION["Id"]; // 取得Session變數
//    $name = $_SESSION["Name"];
//    $price = $_SESSION["Price"];
//    $quantity = $_SESSION["Quantity"];   
// }
// print_r($id);
//header("Location: shoppingcart.php");  // 轉址
?>
</table>
<hr/> | <a href="cd.html">購買CD</a>
| <a href="book.html">購買書籍</a> |