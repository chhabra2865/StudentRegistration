<?php

	include('connection.php');

	$name= $_REQUEST["name"];
	$semfee=$_REQUEST["semfee"];
	$messfee=$_REQUEST["messfee"];
		

	$qry="UPDATE logindatabase SET librarydue='$semfee',messdue='$messfee' WHERE name='$name';";
	$r=mysqli_query($connect,$qry) or die("Error!!!!");
	if($r){
		echo "successfully done";
	}
	else{
		echo "Error";
	}
	
?>