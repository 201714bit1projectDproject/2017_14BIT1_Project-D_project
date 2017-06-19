<?php session_start(); 
 
if (isset($_SESSION['user'])){
    unset($_SESSION['user']);
	unset($_SESSION['pass']);	// xóa session login
}
?>
<a href="index.php">HOME</a>