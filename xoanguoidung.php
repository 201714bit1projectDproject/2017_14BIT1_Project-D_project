<?php
include("../config.php");

$query ="DELETE FROM thanhvien WHERE tendangnhap='". $_REQUEST["ID"] . "'";
mysql_select_db('zone1');

			$result = mysql_query($query); //Thuc thi cau lenh
			if($result)
			{
				header("location:quanlyusers.php"); //Tro ve trang truoc
			}

		else
		{
			echo " k xoa dc ";
		}
?>
