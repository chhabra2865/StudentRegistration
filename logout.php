<?php 
session_start();
if( $_SESSION['loginuserid'] !=""){
	echo"<script>alert('1')</script>";
	 session_unset();	
	 session_destroy();
 	header("Location:index.php");
}

?>
