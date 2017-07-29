
<?php
include('/ketnoi.php');

if (isset($_SESSION['user']) && $_SESSION['pass']){
           $username=$_SESSION["user"];
		$password=$_SESSION["pass"];
       }
       else{
		   echo "bạn phải đăng nhập hoặc đăng kí để mua hàng";
          
		   die();
       }



$id123=$_REQUEST['ID'];
$query = "SELECT ID,ProductName,Image,Price FROM products WHERE ID='$id123'";
$results = mysql_query($query)
    or die(mysql_error());
$row = mysql_fetch_array($results);
extract ($row);
?>
<h3>Sản Phẩm Muốn Thêm Vào Giỏ</h3>
<div id="themgh">
<table>
    <tr>
<?php

    echo "<td id=themghimage><img src='$row[Image]'/></td>";
    echo "<td class=thongtin>";
	    echo "<b>Tên Sản Phẩm:</b> ";
    echo "<br><br>";

    echo "<b class=ten> $row[ProductName]</b>";
    echo "<br><br>";
    echo "<b>Giá Bán:</b> ";
	echo "<br><br>";

	 echo "<b class=gia>$row[Price]</b></td>";
?> </tr>
 
<tr>
<td>
<form method="POST" action="">
&nbsp;&nbsp;&nbsp;&nbsp;Số lượng:
<input type="text" name="sl_them" id="sl_them" value="1" size="1"><?php echo isset($error['sl_them']) ? $error['sl_them'] : ''; ?>
<input type="hidden" name="ID" value="<?php echo $ID; ?>">
<input type="hidden" name="ProductName" value="<?php echo $ProductName; ?>">
<input type="hidden" name="Image" value="<?php echo $Image; ?>">
<input type="hidden" name="Price" value="<?php echo $Price; ?>">

<input type="submit" name="themgiohang" value="Thêm vào giỏ hàng">
</form>

</td>

    </tr>
	<tr class="link">
	<td>
	<a href="?mod=giohang">Xem giỏ hàng</a>
<a href="index.php">Trang chủ</a></td>
	</tr>
</table>
</div>
<?php


$error = array();


if (isset($_POST['themgiohang']))
{
	$sl_them=$_POST['sl_them'];
	if(preg_match('/[^1-9]/',$sl_them))
	{
		$error['sl_them'] = 'Bạn chỉ được gõ các số 1-9 vào ô số lượng!';
	}
	else{
		$sl_them=$_POST['sl_them']; // lay so luong san pham
		$ID = $_POST['ID']; // lay id san pham
		$ProductName = $_POST['ProductName']; // lay id san pham
		$Image = $_POST['Image']; // lay id san pham
		$Price = $_POST['Price']; // lay id san pham
		$query = "INSERT INTO giohang (idsp,sl,tendangnhap,ProductName,Image,Price)
          VALUES ('$ID','$sl_them','$username','$ProductName','$Image','$Price')";
		if ($query)


		echo "<h3>Thêm thành công</h3>";
		echo("<script>location.href = 'index.php?mod=giohang';</script>");

$results = mysql_query($query)
    or die(mysql_error());
		
	}


}
?>
