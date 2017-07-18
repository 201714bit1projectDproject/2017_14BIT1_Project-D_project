<?php
include_once("../config.php");
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
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP-01: LESSON 15</title>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/lib.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="wrapper">
	<div id="topmenu"><?php include_once("includes/topmenu.php"); ?></div>
	<div id="header"><?php include_once("includes/header.php"); ?></div>
				<div class="box-login-info">Xin chào: <?php echo $_SESSION['user']; ?> | <a href="?mod=logout">Thoát</a></div>
		<div id="nav-menu"><?php echo create_menu(); ?></div>
			<div><?php include_once("includes/slider.php"); ?></div>

	<div class="clear"></div>
	<div id="main">



	<div id="mainright">
	<style>
	.button1 {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 30px 170px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 50px 2px 25px 10px;
      cursor: pointer;
  }
  .button2 {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 30px 165px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 50px 10px 25px 2px;
      cursor: pointer;
  }

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
  }
	</style>


  <div>

         <?php
          include_once("config.php");

          $caulenh="select * from products_type";
          $kq=mysql_query($caulenh);

         ?>

         <table width="600" border="2">


             <tr>
               <td>STT</td>
               <td>Product type name</td>
               <td>Product Type ID</td>
               <td>Description</td>


             </tr>

             <?php
          $stt=1;
          while($d=mysql_fetch_array($kq))
          {

             echo

             "<tr>

              <td>$stt</td>
               <td>$d[1]</td>
               <td>$d[2]</td>
               <td>$d[3]</td>
							 <td><a href='xoaloaisp.php?ID=". $d["Possition"] . "'> Delete </a></td>






             </tr>
              ";


          $stt++;
          }

          ?>
        </table>



  </div>



<a href = "quanlysp.php" class="button3">BACK</a>



	</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>


	<div class="clear"></div>


</div>
</div>

</body>
</html>
