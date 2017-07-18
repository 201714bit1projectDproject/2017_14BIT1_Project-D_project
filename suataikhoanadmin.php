<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//include_once ("config.php");
require_once("../connection.php");
include_once('/config.php');
include_once('/ketnoi.php');
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

$username = $_SESSION['user'];
$password = $_SESSION['pass'];
$sql2    = "SELECT * FROM users
						WHERE username='$username'
						AND password='$password' ";
        	$result = @mysql_query($sql2);
        	$row    = @mysql_fetch_array($result);
if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			
 			
  			
			$act=$_POST["active"];
			
			
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$email = $_POST["email"];
			$phone=$_POST["dt"];
			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $firstname == "" || $lastname == "" || $email == "" || $phone == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
					$kt=@mysqli_query($conn, $sql);

					if(@mysqli_num_rows($kt)  ==0 ){
						echo "Tài khoản $user1 không tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    			
	    					
					    $sql=" UPDATE users
SET firstname = '$firstname',lastname = '$lastname',phone = '$phone',email = '$email', modify_date = CURRENT_TIMESTAMP(), modify_user = username ,active='$act'
WHERE username='$username'";
						
   						@mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã sửa tài khoản thành công";
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
      <td>Tài khoản:</td>
      <td align='center'>
	 	<?php
			//echo $row['username'] ;
			echo $username;
		?></td>
    </tr>
   
			<tr>
				<td>Họ:</td>
				<td><input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>"></td>
			</tr>
			<tr>
				<td>Tên :</td>
				<td><input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>"></td>
			</tr>
			<tr>
				<td>Hoạt động :</td>
				<td><input type="diachi" id="active" name="active" value="<?php echo $row['active'];?>"></td>
			</tr>
			<tr>
				<td>Điện thoại :</td>
				<td><input type="dienthoai" id="dt" name="dt" value="<?php echo $row['phone'];?>"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email" value="<?php echo $row['email'];?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Sua tai khoan"></td>
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
