<?php
include("../config.php");

$query ="DELETE FROM Products WHERE ProductName='". $_REQUEST["ID"] . "'";
		mysql_select_db('zone');

			$result = mysql_query($query); //Thuc thi cau lenh
			if($result)
			{
				header("location:quanlysp.php"); //Tro ve trang truoc
			}

		else
		{
			echo " k xoa dc ";
		}
?>
