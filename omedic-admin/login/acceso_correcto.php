<?php 
session_start();
if (isset($_SESSION['id_usuario'])) {
	
}else{
	header("location:login/login.php");
}


?>