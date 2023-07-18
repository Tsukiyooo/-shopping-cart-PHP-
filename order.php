<table border="1">
<?php
    echo "<tr align=center><td colspan=4>您購買的商品如下</td></tr>";
    echo "<tr><td> 項次 </td><td>產品代號</td><td>產品名稱</td><td>價格</td></tr>" ;
    session_start();
    $j=0;
    $price=0;
    $total=0;
    for($i=0;$i<=4;$i++){
        if(isset($_SESSION["Code".$i])){
            $j=$j+1;
            echo "<tr><td>" .$j. "</td>";
            echo "<td>" .$_SESSION["Code".$i]. "</td>";
            echo "<td>" .$_SESSION["Name".$i]. "</td>";
            echo "<td>" .$_SESSION["Price".$i]. "</td></tr>";
            $price=$_SESSION["Price".$i];
            $total=$total+$price;
        }
    }echo "<tr align=right><td colspan=4>總金額=" .$total. "</td></tr>";
?>
</table>
<hr/> | <a href="cd.html">購買CD</a>
| <a href="book.html">購買書籍</a> |