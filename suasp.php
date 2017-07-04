<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include_once("includes/lib.php");
    include_once("config.php");
	
	require_once("connection.php");
	
	$ID=$_REQUEST['ID'];
	$sql2="SELECT * from products WHERE ProductName='$ID' ";
						
	$result = @mysql_query($sql2);
	$row    = @mysql_fetch_array($result);
	
	define ("MAX_SIZE","500");
 
// hàm này đọc phần mở rộng của file. Nó được dùng để kiểm tra nếu
// file này có phải là file hình hay không .
function getExtension($str) {
$i = strrpos($str,".");
if (!$i) { return ""; }
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}
$errors=0;	
	
if(isset($_POST['submit']))
{
// lấy tên file upload
$image=$_FILES['image']['name'];
// Nếu nó không rỗng
if ($image)
{
// Lấy tên gốc của file
$filename = stripslashes($_FILES['image']['name']);
//Lấy phần mở rộng của file
$extension = getExtension($filename);
$extension = strtolower($extension);
// Nếu nó không phải là file hình thì sẽ thông báo lỗi
if (($extension != "jpg") && ($extension != "jpeg") && ($extension !=
"png") && ($extension != "gif"))
{
// xuất lỗi ra màn hình
echo '<h1>Đây không phải là file hình!</h1>';
$errors=1;
}
else
{
//Lấy dung lượng của file upload
$size=filesize($_FILES['image']['tmp_name']);
if ($size > MAX_SIZE*1024)
{
echo '<h1>Vượt quá dung lượng cho phép!</h1>';
$errors=1;
}
 
// đặt tên mới cho file hình up lên
$image_name=time().'.'.$extension;
// gán thêm cho file này đường dẫn
$newname="../uploaded_files/".$image_name;
$newname2="uploaded_files/".$image_name;
// kiểm tra xem file hình này đã upload lên trước đó chưa
$copied = copy($_FILES['image']['tmp_name'], $newname);
if (!$copied)
{
echo '<h1> File hình này đã tồn tại </h1>';
$errors=1;
}}}}
 
if(isset($_POST['submit']) && !$errors)
{
echo "<h1>File hình đã được Upload thành công </h1>";
}   
					
				

	
	

				if (isset($_POST["submit"]))  //Neu nhan nut cap nhat
				{

					$SKU = $_POST["txtSKU"];
					$Price =  $_POST["txtPrice"];
					$Description =  $_POST["txtDescription"];
					$Hedieuhanh =  $_POST["txtHedieuhanh"];
					$Manhinh =  $_POST["txtManhinh"];
					$Ram =  $_POST["txtRam"];
					$Camera = $_POST["txtCamera"];
					$Pin = $_POST["txtPin"];
					$CPU = $_POST["txtCPU"];
					$PriceNew = $_POST["txtPricenew"];
					//$file_name=$_POST["image"];

					$sql=" UPDATE products
						SET SKU = '$SKU',Price='$Price',Description = '$Description',Image='$newname2', Hedieuhanh='$Hedieuhanh',Manhinh='$Manhinh',Ram='$Ram',Camera='$Camera',Pin='$Pin',CPU='$CPU',PriceNew='$PriceNew'
						WHERE ProductName='$ID' ";
					//@mysqli_select_db('zone');
					@mysqli_query($conn,$sql);
					echo "$ID cap nhat thanh cong";
					



					//$result = @mysqli_query($sql); //Thuc thi cau lenh
					
					//if($result)
					//{
						//header("location:quanlysp.php"); //Tro ve trang truoc

					//}
					
				}




?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<form name="form1" method="post" action="suasp.php?flag=1&ID=<?= $_REQUEST['ID'] ?>"  enctype = "multipart/form-data">



	SKU: <input name="txtSKU" id="txtSKU" type="text" value="<?php echo $row['SKU'] ;?>" /><hr>


	Price: <input name="txtPrice" id="txtPrice" type="text" value="<?php echo $row['Price'] ;?>" /><hr>
  hinhanh:
<!--<form action="" method = "post" enctype = "multipart/form-data">!-->
  <tr><td><input type="file" id="image" name="image"></td></tr><hr>




 Description: <input name="txtDescription" id="txtDescription" type="text"  value="<?php echo $row['Description'] ;?>"/><hr>

  He Dieu Hanh: <input name="txtHedieuhanh" id="txtHedieuhanh" type="text"  value="<?php echo $row['Hedieuhanh'] ;?>"/><hr>

  Man Hinh: <input name="txtManhinh"  id="txtManhinh" type="text" value="<?php echo $row['Manhinh'] ;?>" /><hr>
  Ram: <input name="txtRam" id="txtRam" type="text" value="<?php echo $row['Ram'] ;?>" /><hr>
  Camera: <input name="txtCamera" id="txtCamera" type="text"  value="<?php echo $row['Camera'] ;?>"/><hr>
  Pin: <input name="txtPin" id="txtPin" type="text" value="<?php echo $row['Pin'] ;?>" /><hr>
  CPU: <input name="txtCPU"  id="txtCPU" type="text"  value="<?php echo $row['CPU'] ;?>"/><hr>
  Price New: <input name="txtPricenew" id="txtPricenew" type="text"  value="<?php echo $row['PriceNew'] ;?>"/><hr>
	<input type="submit" name="submit" value="submit" />
</form>

</body>
</html>
