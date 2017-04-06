<?php

	/*define("SERVER","localhost");
	define("USER","root");
	define("PASS","");
	define("DB","software");

	$connect=mysqli_connect(SERVER, USER, PASS, DB) or die("<script>alert('Problem Connecting Database.Please try after sometime.')</script>");
	if(!$connect){
	 	echo"<script>alert('Problem Connecting Database.Please try after sometime.')</script>";
	}*/

$connect = mysqli_connect('localhost','root','','software');
if(!$connect)
{
	echo"<script>alert('connection to database failed.')</script>";
}
?>