<h3>Liên Hệ</h3>



<div id="lienhe">

<span class="style">CÔNG TY CỔ PHẦN CÔNG NGHỆ FA</span>
<p class="tintuc">

<p class="tintuc">Địa chỉ:227 Nguyễn Văn Cừ, phường 4, Quận 5, Hồ Chí Minh</p>
<p class="tintuc">Điện thoại:0123456789</p>
<p class="tintuc">Fax:</p>
<p class="tintuc">Email:congaconga@gmail.com</p>
</p>
<h3>Thông Tin Phản Hồi</h3>

<div id="thongtinlienhe">
<p>Xin vui lòng điền các yêu cầu vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được.
Xin chân thành cảm ơn!</p>

<?php
$sessid = session_id();
?>
<form method="post" action="">
<table>

    <tr>
<td>
Họ tên
</td>
<td>
<input type="text" name="hoten" size="35">
</td>
    </tr>
    <tr>
<td>
Địa chỉ
</td>
<td>
<input type="text" name="diachi" size="35">
</td>
    </tr>
    <tr>
<td>
Email
</td>
<td>
<input type="text" name="email" size="35">
</td>
    </tr>
    <tr>
<td>
Số điện thoại</td>
<td>
<input type="text" name="sdt" size="35">
</td>
    </tr>
    <tr>
<td>
Tiêu đề
</td>
<td>
<input type="text" name="tieude" size="35" maxlength="12">
</td>
    </tr>
    <tr>
<td>
Nội dung</td>
<td>
<textarea name="noidung" cols="36"  style="height:80px"></textarea>
</td>
    </tr>
   
<tr>
<td colspan="2" height="50px">
<div align="center">
<form action="" method="POST">
<input type="submit" name="gui" value="GỬI ĐƠN HÀNG">
<form>
</div>
</td>
    </tr>
</table>
<?php
if (isset($_POST['gui']))
{
$hoten = $_POST['hoten'];
$diachi = $_POST['diachi'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$td = $_POST['tieude'];
$noidung = $_POST['noidung'];
if($noidung==""||$hoten==""||$diachi==""||$email==""||$sdt==""||$td=="")
{
	echo "các ô không được để trống";
	
}
else{
	//viết điều kiện yêu cầu  nhập tất cả các thông tin
	$lienhe = "INSERT INTO lienhe (hoten,diachi,email,sdt,tieude,noidung) VALUES ('$hoten','$diachi','$email','$sdt','$td','$noidung')";
$tb1 = mysql_query($lienhe);

echo "<h3>Gửi Thành Công</h3>";

}


}
?>

</div>
</div>


