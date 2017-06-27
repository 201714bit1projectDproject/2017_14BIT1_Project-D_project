<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//include_once ("config.php");
require_once("connection.php");
include_once("admin/includes/lib.php");
$username = $_SESSION['user'];
$password = $_SESSION['pass'];
$sql2    = "SELECT * FROM thanhvien 
						WHERE tendangnhap='$username' 
						AND matkhau='$password' ";
        	$result = @mysql_query($sql2);
        	$row    = @mysql_fetch_array($result);
if (isset($_POST["btn_submit"])) {
			$pass1 = $_POST["pass"];
  			$pass2= $_POST["pass1"];
			$pass3=$_POST["pass2"];
  				
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			if ($pass2 == "" || $pass3 == "" || $pass1 == "" ) 
			{
			echo "bạn vui lòng nhập đầy đủ thông tin";}
			else{
					  
					if($pass1==$pass2||$pass1==$pass3)
					  echo "mật khẩu cũ không được trùng với mật khẩu mới";
					else{
						if($pass2!=$pass3)
							echo "mật khẩu mới và nhập lại mật khẩu mới phải gi61ng nhau";
						else{
							// Kiểm tra tài khoản đã tồn tại chưa
						$sql="select * from thanhvien where tendangnhap='$username'";
						$kt=@mysqli_query($conn, $sql);
 
						if(@mysqli_num_rows($kt)  ==0 ){
							echo "Tài khoản không tồn tại tồn tại";
						}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    			
	    					
						$sql=" UPDATE thanhvien
							SET matkhau = '$pass3'
							WHERE tendangnhap='$username'";
   						@mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã sửa mật khẩu thành công";
						}
					}
				  }
				   
				}	
									    
					
			  
			}
?>

	<form action="" method="post">
		<table width="500px" border="1" align="center">
			<tr>
				<td colspan='2' align='center'><b>Form chinh sua thong tin tai khoan </b></td>
			</tr>
			
			<tr>
				<td>Username :</td>
				<td><?php echo $row['tendangnhap'] ;?></td>
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
