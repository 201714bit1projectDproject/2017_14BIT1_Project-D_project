<?php
include("../config.php");

$query ="DELETE FROM products_type WHERE Possition='". $_REQUEST["ID"] . "'";
mysql_select_db('zone');

			$result = mysql_query($query); //Thuc thi cau lenh
			if($result)
			{
				header("location:dsloaisp.php"); //Tro ve trang truoc
			}

		else
		{
			echo " k xoa dc ";
		}
?>
