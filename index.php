<?php  
	$a=date("His");

	session_start();
	$_SESSION['id_user']=$a;

	header('location:pertanyaan.php?id=1');
	exit;
	
	//nbkmfkjhfjkhdsjnsdkl
	//jhcjdhjnjksn
	
?>