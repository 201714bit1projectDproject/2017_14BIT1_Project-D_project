<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//include_once ("config.php");
require_once("connection.php");
include_once("admin/includes/lib.php");
if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			$name = $_POST["name"];
  			$email = $_POST["email"];
			$diachi=$_POST["dc"];
			$dienthoai=$_POST["dt"];
			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $name == "" || $email == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from thanhvien where tendangnhap='$username'";
					$kt=@mysqli_query($conn, $sql);
 
					if(@mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO thanhvien(
	    					tendangnhap,
	    					matkhau,
	    					hoten,
						    email,
							diachi,
							dienthoai
							
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
	    					'$email',
							'$diachi',
							'$dienthoai'
					
	    					)";
					    
   						@mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	}
?>

	<form action="" method="post">
		<table width="500px" border="1" align="center">
			<tr>
				<td colspan='2' align='center'><b>Form dang ky </b></td>
			</tr>
			
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Ho Ten :</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>dia chi :</td>
				<td><input type="diachi" id="dc" name="dc"></td>
			</tr>
			<tr>
				<td>dien thoai :</td>
				<td><input type="dienthoai" id="dt" name="dt"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky"></td>
			</tr>
 
		</table>
		
	</form>
