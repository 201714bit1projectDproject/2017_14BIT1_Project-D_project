<?php
include("../config.php");
$ID=$_REQUEST["ID"];
$query ="UPDATE hoadon SET tinhtrang='1' WHERE id='$ID' ";
mysql_select_db('zone');

			$result = mysql_query($query); //Thuc thi cau lenh
			if($result)
			{
				//echo $ID;
				header("location:quanlydonhang.php"); //Tro ve trang truoc
			}

		else
		{
			echo " k giao dc ";
		}
?>
