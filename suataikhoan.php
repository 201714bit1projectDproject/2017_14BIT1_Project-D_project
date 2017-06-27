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
  			//lấy thông tin từ các form bằng phương thức POST
  			
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
 
					if(@mysqli_num_rows($kt)  ==0 ){
						echo "Tài khoản không tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    			
	    					
					   $sql=" UPDATE thanhvien
SET hoten = '$name',email= '$email',diachi='$diachi',dienthoai='$dienthoai'
WHERE tendangnhap='$username'";
   						@mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã sửa tài khoản thành công";
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
				<td>Ho Ten :</td>
				<td><input type="text" id="name" name="name" value="<?php echo $row['hoten']; ?>"></td>
			</tr>
			<tr>
				<td>dia chi :</td>
				<td><input type="diachi" id="dc" name="dc" value="<?php echo $row['diachi'];?>"></td>
			</tr>
			<tr>
				<td>dien thoai :</td>
				<td><input type="dienthoai" id="dt" name="dt" value="<?php echo $row['dienthoai'];?>"></td>
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
