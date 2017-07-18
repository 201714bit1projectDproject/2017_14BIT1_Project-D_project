<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//include_once ("config.php");
require_once("connection.php");
include_once("admin/includes/lib.php");
$username = $_SESSION['user'];
$password = $_SESSION['pass'];
$sql2    = "SELECT * FROM users
						WHERE username='$username'
						AND password='$password' ";
        	$result = @mysql_query($sql2);
        	$row    = @mysql_fetch_array($result);
if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST

 			$firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
  		$email = $_POST["email"];
			$phone=$_POST["phone"];

  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $firstname == "" || $lastname == "" || $email == "" || $phone == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
					$kt=@mysqli_query($conn, $sql);

					if(@mysqli_num_rows($kt)  ==0 ){
						echo "Tài khoản không tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db


					   $sql=" UPDATE users
SET firstname = '$firstname',lastname = '$lastname',phone = '$phone',email = '$email', modify_date = CURDATE(), modify_user = username
WHERE username='$username'";
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
				<td><?php echo $row['username'] ;?></td>
			</tr>
			<tr>
				<td>Firstname :</td>
				<td><input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>"></td>
			</tr>
      <tr>
				<td>lastname :</td>
				<td><input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>"></td>
			</tr>
			<tr>
        <tr>
  				<td>Email :</td>
  				<td><input type="text" id="email" name="email" value="<?php echo $row['email'];?>"></td>
  			</tr>
				<td>Phone :</td>
				<td><input type="number" id="phone" name="phone" value="<?php echo $row['phone'];?>"></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Sua tai khoan"></td>
			</tr>

		</table>

	</form>
