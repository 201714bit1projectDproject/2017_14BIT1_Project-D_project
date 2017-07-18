<?php
include_once("../config.php");
include_once("includes/lib.php");

session_start();
$_SESSION['user'] = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$_SESSION['pass'] = isset($_SESSION['pass']) ? $_SESSION['pass'] : '';

$vModule = isset($_GET["mod"]) ? $_GET["mod"] : '';
$vType = isset($_GET["type"]) ? $_GET["type"] : '';
$vAct = isset($_GET["act"]) ? $_GET["act"] : '';
$vID = isset($_GET["id"]) ? $_GET["id"] : '';
$vMsgStatus = isset($_GET["msgstatus"]) ? $_GET["msgstatus"] : '';

if($vModule=='logout') {
	dangxuat();
}

if(xacthuc($_SESSION['user'], $_SESSION['pass'])==false) {
	header("Location: login.php");
}

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
	
if(isset($_POST['THEM']))
{
// lấy tên file upload
$image=$_FILES['hinhanh']['name'];
// Nếu nó không rỗng
if ($image)
{
// Lấy tên gốc của file
$filename = stripslashes($_FILES['hinhanh']['name']);
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
$size=filesize($_FILES['hinhanh']['tmp_name']);
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
$copied = copy($_FILES['hinhanh']['tmp_name'], $newname);
if (!$copied)
{
echo '<h1> File hình này đã tồn tại </h1>';
$errors=1;
}}}}
 
if(isset($_POST['THEM']) && !$errors)
{
echo "<h1>File hình đã được Upload thành công </h1>";
}   

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP-01: LESSON 15</title>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/lib.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="wrapper">
	<div id="topmenu"><?php include_once("includes/topmenu.php"); ?></div>
	<div id="header"><?php include_once("includes/header.php"); ?></div>
				<div class="box-login-info">Xin chào: <?php echo $_SESSION['user']; ?> | <a href="?mod=logout">Thoát</a></div>
		<div id="nav-menu"><?php echo create_menu(); ?></div>
			<div><?php include_once("includes/slider.php"); ?></div>

	<div class="clear"></div>
	<div id="main">



	<div id="mainright">

    <?php
    	if(isset($_POST["THEM"])&&($_POST["THEM"]=="Thêm"))
    	{


    		$producttypeid =$_POST["ProductTypeID"];
    		$tensp=$_POST["tensp"];
    		$SKU=$_POST["SKU"];
    		$price=$_POST["price"];
    		$hinh=$_FILES["hinhanh"]["name"];
        $mota=$_POST["mota"];
    		$hedieuhanh=$_POST["hedieuhanh"];
        $manhinh=$_POST["manhinh"];
        $ram=$_POST["ram"];
        $camera=$_POST["camera"];
        $pin=$_POST["pin"];
        $CPU=$_POST["CPU"];
        $pricenew=$_POST["pricenew"];

    		$str ="insert into products( ProductName, SKU,ProductTypeID, Price, Image, Description, Hedieuhanh,Manhinh,Ram,Camera,Pin,CPU,PriceNew) values('$tensp','$SKU','$producttypeid','$price','$newname2','$mota','$hedieuhanh','$manhinh','$ram','$camera','$pin','$CPU','$pricenew')";
mysql_select_db('zone');
				mysql_query($str,$vConn);
					



    		//up hinh


				echo"them thanh cong";
			}
    ?>


<form method="post" action="themsp.php" enctype="multipart/form-data">
    <table width="600" border="1">
      <tbody>
             <tr>
          <td width="296">Product types</td>
          <td width="298"><?php


				$str="select * from products_type";
				$rs=mysql_query($str,$vConn);
            	echo "<select id='ProductTypeID' name='ProductTypeID'>";
					while($row=mysql_fetch_row($rs))
						{
							echo "<option value='$row[2]'>$row[1]</option>";
						}
                echo "</select>";
			?>
      </td>
    </tr>
       <tr>
          <td width="296">ProductName</td>
          <td width="298"><input type="text" id="tensp" name="tensp"></td>
        </tr>

         <tr>
          <td width="296">SKU</td>
          <td width="298"><input type="text" id="SKU" name="SKU"></td>
        </tr>

        <tr>
          <td width="296">Price</td>
          <td width="298"><input type="text" id="price" name="price"></td>
        </tr>


         <tr>
          <td width="296">Desciption</td>
          <td width="298"><input type="text" id="mota" name="mota"></td>
        </tr>

        <tr>
         <td width="296">Hệ Điều Hành</td>
         <td width="298"><input type="text" id="hedieuhanh" name="hedieuhanh"></td>
       </tr>

       <tr>
        <td width="296">Màn Hình</td>
        <td width="298"><input type="text" id="manhinh" name="manhinh"></td>
      </tr>

      <tr>
       <td width="296">Ram</td>
       <td width="298"><input type="text" id="ram" name="ram"></td>
     </tr>


     <tr>
      <td width="296">Camera</td>
      <td width="298"><input type="text" id="camera" name="camera"></td>
    </tr>

    <tr>
     <td width="296">Pin</td>
     <td width="298"><input type="text" id="pin" name="pin"></td>
   </tr>

   <tr>
    <td width="296">CPU</td>
    <td width="298"><input type="text" id="CPU" name="CPU"></td>
  </tr>

  <tr>
   <td width="296">PriceNew</td>
   <td width="298"><input type="text" id="pricenew" name="pricenew"></td>
 </tr>


    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh" id="hinhanh"></td>
    </tr>


        <tr>
          <td><input type="submit" value="Thêm" name="THEM"></td>
          <td><input type="reset"></td>
        </tr>
        <tr align="center">

        </tr>

      </tbody>
    </table>
</form>
<style>
.button3 {
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 30px 12px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 15px 2px 25px 10px;
		cursor: pointer;
}

</style>
<a href = "index.php" class="button3">Quay Lai trang ADmin </a>
    <a href = "quanlysp.php" class="button3">BACK</a>






	</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>


	<div class="clear"></div>


</div>
</div>

</body>
</html>
