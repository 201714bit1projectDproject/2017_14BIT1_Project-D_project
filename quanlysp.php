



<!-- tuyet roi -->
<script type="text/javascript">

/******************************************
* Snow Effect Script- By Altan d.o.o. (http://www.altan.hr/snow/index.html)
* Visit Dynamic Drive DHTML code library (http://www.dynamicdrive.com/) for full source code
* Last updated Nov 9th, 05' by DD. This notice must stay intact for use
******************************************/
  function openwindow(){
window.open("autumn_effect.htm","","width=350,height=500")
}

  //Configure below to change URL path to the snow image
  var snowsrc="images/phone.jpg"
  // Configure below to change number of snow to render
  var no = 10;
  // Configure whether snow should disappear after x seconds (0=never):
  var hidesnowtime = 0;
  // Configure how much snow should drop down before fading ("windowheight" or "pageheight")
  var snowdistance = "pageheight";

///////////Stop Config//////////////////////////////////

  var ie4up = (document.all) ? 1 : 0;
  var ns6up = (document.getElementById&&!document.all) ? 1 : 0;

	function iecompattest(){
	return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
	}

  var dx, xp, yp;    // coordinate and position variables
  var am, stx, sty;  // amplitude and step variables
  var i, doc_width = 800, doc_height = 600;

  if (ns6up) {
    doc_width = self.innerWidth;
    doc_height = self.innerHeight;
  } else if (ie4up) {
    doc_width = iecompattest().clientWidth;
    doc_height = iecompattest().clientHeight;
  }

  dx = new Array();
  xp = new Array();
  yp = new Array();
  am = new Array();
  stx = new Array();
  sty = new Array();
  snowsrc=(snowsrc.indexOf("dynamicdrive.com")!=-1)? "snow.gif" : snowsrc
  for (i = 0; i < no; ++ i) {
    dx[i] = 0;                        // set coordinate variables
    xp[i] = Math.random()*(doc_width-50);  // set position variables
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;         // set amplitude variables
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();     // set step variables
		if (ie4up||ns6up) {
      if (i == 0) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://dynamicdrive.com\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
      } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
      }
    }
  }

  function snowIE_NS6() {  // IE and NS6 main animation function
    doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
		doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")?  iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
	if (snowdistance=="windowheight"){
		doc_height = window.innerHeight || iecompattest().clientHeight
	}
	else{
		doc_height = iecompattest().scrollHeight
	}
    for (i = 0; i < no; ++ i) {  // iterate for every dot
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
        xp[i] = Math.random()*(doc_width-am[i]-30);
        yp[i] = 0;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
      }
      dx[i] += stx[i];
      document.getElementById("dot"+i).style.top=yp[i]+"px";
      document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";
    }
    snowtimer=setTimeout("snowIE_NS6()", 10);
  }

	function hidesnow(){
		if (window.snowtimer) clearTimeout(snowtimer)
		for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
	}


if (ie4up||ns6up){
    snowIE_NS6();
		if (hidesnowtime>0)
		setTimeout("hidesnow()", hidesnowtime*1000)
		}

</script>

<!-- end tuyet roi-->

<?php


include_once ("../config.php");
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
      padding: 30px 175px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 50px 2px 15px 10px;
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
      margin: 50px 10px 15px 2px;
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
  .button4 {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 30px 145px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 15px 2px 25px 10px;
      cursor: pointer;
  }
  .button5 {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 30px 165px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 15px 2px 25px 2px;
      cursor: pointer;
  }




  </style>

       <a href = "themsp.php" class="button1">Thêm Sản Phẩm </a>
          <a href = "themloaisp.php" class="button2">Thêm loai san pham </a>

         <a href = "dsloaisp.php" class="button4"> danh sach loai san pham</a>
          <a href = "timsp.php" class="button5">Tim Kiem San Pham</a>






<div>




       <?php
       	include_once("config.php");

       	$caulenh="select * from products";
       	$kq=@mysql_query($caulenh);
		//if (isset($_POST['edit']))
//{
			
			//$SKU = $_POST["txtSKU"];
			//$Price =  $_POST["txtPrice"];
			//$Desciption =  $_POST["txtDescription"];
			//$Hedieuhanh =  $_POST["txtHedieuhanh"];
			//$Manhinh =  $_POST["txtManhinh"];
			//$Ram =  $_POST["txtRam"];
			//$Camera = $_POST["txtCamera"];
			//$Pin = $_POST["txtPin"];
			//$CPU = $_POST["txtCPU"];
			//$PriceNew = $_POST["txtPricenew"];
			//$_SESSION['user'] = $username;
			//$_SESSION['pass'] = $password;
//}
       ?>

       <table width="600" border="2">


           <tr>
             <td>STT</td>
             <td>ProductTypeID</td>
             <td>ProductName</td>
             <td>SKU</td>
             <td>Price</td>
             <td>Image</td>
             <td>Desciption</td>
             <td>He Dieu Hanh</td>
             <td>Man Hinh</td>
             <td>Ram</td>
             <td>camera</td>
             <td>Pin</td>
             <td>CPU</td>
             <td>PriceNew</td>
             <td>sua</td>
             <td>xoa</td>

           </tr>

           <?php
       	$stt=1;
       while($d=@mysql_fetch_array($kq))
       	{

           echo

           "<tr>

            <td>$d[0]</td>
             <td>$d[1]</td>
             <td>$d[2]</td>
             <td>$d[3]</td>
              <td>$d[4]</td>

              <td><img src='../$d[5]' width='100' height='100'></td>
              <td>$d[6]</td>
              <td>$d[7]</td>
              <td>$d[8]</td>
              <td>$d[9]</td>
              <td>$d[10]</td>
              <td>$d[11]</td>
              <td>$d[12]</td>
              <td>$d[13]</td>
			  
              <td><a href='suasp.php?ID=". $d["ProductName"] . "'  > EDIT </a></td>
              <td><a href='xoasp.php?ID=". $d["ProductName"] . "'> Delete </a></td>






           </tr>
            ";


       	$stt++;
       	}

       	?>
      </table>



</div>




<div>




</div>
<a href = "index.php" class="button3">Quay Lai trang ADmin </a>


	</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>


	<div class="clear"></div>


</div>
</div>

</body>
</html>
