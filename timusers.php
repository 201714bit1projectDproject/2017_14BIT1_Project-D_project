



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
      margin: 15px 10px 25px 10px;
      cursor: pointer;
  }




  </style>

  <?php


  if (isset($_GET['q']) && !empty($_GET['q'])) {
      $keyword = $_GET['q'];

      $caulenh="select * from thanhvien where hoten LIKE '%$keyword%'";
      $kq2=mysql_query($caulenh);

     ?>

     <table width="600" border="2">


         <tr>
           <td>STT</td>
           <td>Ma thanh vien</td>
           <td>Ten dang nhap</td>
           <td>Mat khau</td>
           <td>HO ten</td>
           <td>Dia chi</td>
           <td>Dien thoai</td>
           <td>Email</td>
           <td>Trang thai thanh vien</td>


         </tr>

         <?php
      $stt=1;
      while($d=mysql_fetch_array($kq2))
      {

         echo

         "<tr>

          <td>$stt</td>
           <td>$d[0]</td>
           <td>$d[1]</td>
           <td>$d[2]</td>
            <td>$d[3]</td>
            <td>$d[4]</td>

            <td>$d[5]</td>
            <td>$d[6]</td>
            <td>$d[7]</td>






         </tr>
          ";


      $stt++;
      }
    }
    else {echo"k tim thay";}

      ?>
    </table>


  <div>



        <table class="search-form" cellpadding="10">
          <tr>
              <td>
                  <form action="" method ="get">
                      <input type="text"name="q" placeholder="Nhap tu khoa can tim" value="<?php
                      if (isset($_GET['q'])) {echo $_GET['q'];}?>" />

                      <input type="submit" class="button3" value="tim"/>
                      <input type="button" class=button3 value="tat ca" onclick="window.location.href='/mobile/admin/quanlyusers.php'"/>
                  </form>
                </td>
            </tr>
          </table>


  </div>





<div>




</div>
<a href = "quanlyusers.php" class="button3">Quay Lai  </a>


	</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>


	<div class="clear"></div>


</div>
</div>

</body>
</html>
