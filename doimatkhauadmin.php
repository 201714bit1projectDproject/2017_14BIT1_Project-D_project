<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//include_once ("config.php");
require_once("connection.php");
include_once('/config.php');
include_once('/ketnoi.php');
include_once("includes/lib.php");
session_start();

$_SESSION['user'] = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$_SESSION['pass'] = isset($_SESSION['pass']) ? $_SESSION['pass'] : '';
$username = $_SESSION['user'];
$password = $_SESSION['pass'];
$sql2    = "SELECT * FROM users 
						WHERE username='$username' 
						AND password='$password' ";
        	$result = @mysql_query($sql2);
        	$row    = @mysql_fetch_array($result);
if (isset($_POST["btn_submit"])) {
			$pass1 = $_POST["pass"];
  			$pass2= $_POST["pass1"];
			$pass3 = $_POST["pass2"];
  				
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			if ($pass2 == "" || $pass3 == "" || $pass1 == "" ) 
			{
				echo "bạn vui lòng nhập đầy đủ thông tin";
				}
			if else($pass1 != $password)
			{
				echo "sai mật khẩu cũ";
			}
			else{
					  
					if($pass1==$pass2||$pass1==$pass3)
					  echo "mật khẩu cũ không được trùng với mật khẩu mới";
					else{
						if($pass2!=$pass3)
							echo "mật khẩu mới và nhập lại mật khẩu mới phải giống nhau";
						else{
							// Kiểm tra tài khoản đã tồn tại chưa
						$sql="select * from users where username='$username'";
						$kt=@mysqli_query($conn, $sql);
 
						if(@mysqli_num_rows($kt)  ==0 ){
							echo "Tài khoản không tồn tại tồn tại";
						}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    			
	    					
						$sql=" UPDATE users
							SET password = '$pass3', modify_date = CURRENT_TIMESTAMP(), modify_user='$username'
							WHERE username='$username'";
   						@mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã sửa mật khẩu thành công";
						}
					}
				  }
				   
				}	
									    
					
			  
			}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROJECTD</title>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/lib.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>

<body>

<div id="wrapper">
	<div id="topmenu"><?php include_once("includes/topmenu.php"); ?></div>
	<div id="header"><?php include_once("includes/header.php"); ?></div>
				
		<div id="nav-menu"><?php echo create_menu(); ?></div>
			<div><?php include_once("includes/slider.php"); ?></div>

	<div class="clear"></div>
	<div id="main">



	<div id="mainright">



	<form action="" method="post">
		<table width="500px" border="1" align="center">
			<tr>
				<td colspan='2' align='center'><b>Form chinh sua thong tin tai khoan </b></td>
			</tr>
			
			<tr>
				<td>Username :</td>
				<td><?php echo $row['username'] ;?></td>
			</tr>
			<tr>
				<td>Old password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>New password :</td>
				<td><input type="password" id="pass1" name="pass1"></td>
			</tr>
			<tr>
				<td>Retype new Password :</td>
				<td><input type="password" id="pass2" name="pass2"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="doi mat khau"></td>
			</tr>
 
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
</style>

<a href = "index.php" class="button3">Quay Lai trang Admin </a>


	</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>


	<div class="clear"></div>


</div>
</div>

</body>
</html>