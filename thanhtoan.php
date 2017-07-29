
<?php
include_once("config.php");
include('/ketnoi.php');
require_once("connection.php");
$username = $_SESSION['user'];
$sql2    = "SELECT * FROM thanhvien 
						WHERE tendangnhap='$username' ";

        	$result = @mysql_query($sql2);
        	$row    = @mysql_fetch_array($result);
 


if (isset($_POST['gui']))
{

$hoten = $_POST["hoten"];
$sdt = $_POST["sodienthoai"];
$diachi = $_POST["diachi"];

$email = $_POST["email"];
	if($hoten==""||$sdt==""||$diachi==""||$_POST["paymethod"]==""||$email=="")
	{
		echo"bạn chưa hoàn tất toàn bộ yêu cầu! ";
		
	}
	else{

//viết điều kiện yêu cầu  nhập tất cả các thông tin
$paymethod = $_POST["paymethod"];
$hoadon = "INSERT INTO hoadon (tendangnhap,hoten,sodienthoai,diachi,tgiandatmua,paymethod,email) VALUES ('$username','$hoten','$sdt','$diachi',CURRENT_TIMESTAMP(),'$paymethod','$email')";
$tb1 = mysql_query($hoadon);
$dathang = "SELECT * FROM giohang WHERE tendangnhap='$username'";
$dathang1 = mysql_query($dathang);
while($dathang3=mysql_fetch_assoc($dathang1))
{
$id = $dathang3['idgh'];
$tensp = $dathang3['ProductName'];
$sl = $dathang3['sl'];
$Price = $dathang3['Price'];
$idsp = $dathang3['idsp'];
$gia=$dathang3['Price'] * $dathang3['sl'];

$copy = "INSERT INTO dathang (tendangnhap,idsp,ProductName,sl,Price,TongTien) values ('$username','$idsp','$tensp','$sl','$Price','$gia')";
$tb2 = mysql_query($copy);
$xoa = "DELETE FROM giohang WHERE idgh='$id'";
$tb3 = mysql_query($xoa);
}
if (($tb1)&&($tb2)&&($tb3))
{
echo "Đặt hàng thành công";
echo("<script>location.href = 'index.php?mod=thongbao';</script>");
}
}}
?>


<script language="javascript">
															
								function checkform()
											{
													
												regEx = /^\s*$/;
												regExMail = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,4}$/;
													
												
												
												if(regEx.test(document.check.hoten.value))
												{
												
													alert('Nhập tên người mua hàng!');
													document.check.hoten.focus();
													return false;
												}
												if(regEx.test(document.check.sodienthoai.value))
												{
													alert('Nhập số điện thoại!');
													document.check.sodienthoai.focus();
													return false;
												}
												
												
												if(regEx.test(document.check.diachi.value))
												{
													alert('Nhập địa chỉ liên hệ!');
													document.check.diachi.focus();
													return false;
												}
													
											
													if(regExRadio.test(document.check.paymethod.value))
												{
													alert('Chọn hình thức thanh toán!');
													document.check.paymethod.focus();
													return false;
												}
													
												if(document.check.title.value.length>60)
												{
													alert('Please enter < 60 character!');
													document.check.title.focus();
													return false;
												}
												
												if(document.check.message.value.length>500)
												{
													alert('Please enter < 500 character!');
													document.check.message.focus();
													return false;
												}
												
												
											
											}
											function count()
												{
													document.check.txtcount.value=500-document.check.message.value.length;
													
												}
													 
							</script>
							
							
							
							
							
<h3>Đặt Mua</h3>
<form id="check" name="check"  method="post" onsubmit="return checkform()">
<table bordercolor="#e0e0e0" align="center">

  <tr>
  <td colspan="2"  align="center"><h3>Thông Tin Đặt Mua</h3></td>
  </tr>
  
    <tr>
<td>
Họ tên người nhận:
</td>
<td>
<input type="text" name="hoten" id="hoten"  value="<?php echo $row[1] ;?>" size="31">
</td>
    </tr>
 
<tr>
<td>
Số điện thoại người nhận:
</td>
<td>
<input type="text" name="sodienthoai" id="sodienthoai"  value="<?php echo $row[5] ;?>" size="31">
</td>
    </tr>
    <tr>
	
<td>
Email:
</td>
<td>
<input type="text" name="email" id="email" size="31" value="<?php echo $row[6] ;?>">
</td>
    </tr>
    <tr>	

<td>
Địa điểm giao hàng</td>
<td>
<input type="text" name="diachi" id="diachi" size="31">
</td>
    </tr>
	  <tr>
  <td colspan="2"  align="center"><h3>Hình Thức Thanh Toán</h3></td>
  </tr>
	   <tr>
<td><img src="images/pay1.jpg" alt="" /></td>
<td>
<input type="radio" name="paymethod" id="paymethod" value="Giao hàng và thu tiền tận nhà quý khách." size="25">Giao hàng và thu tiền tận nhà quý khách. 
</td>
    </tr>
   <tr>
<td><img src="images/pay2.jpg" alt="" /></td>
<td>
<input type="radio" name="paymethod" id="paymethod" value="Thanh toán tại công ty. " >Thanh toán tại công ty. 
</td>
    </tr>
   <tr>
<td><img src="images/pay3.jpg" alt="" /></td>
<td>
<input type="radio" name="paymethod" id="paymethod" value=" Thanh toán chuyển khoản qua ngân hàng." size="25"> Thanh toán chuyển khoản qua ngân hàng. 
</td>
    </tr>

<td colspan="2" height="50px">
<div align="center">
<form action="" method="POST">
<input type="submit" name="gui" value="GỬI ĐƠN HÀNG">
<form>
</div>
</td>
    </tr>
</table>