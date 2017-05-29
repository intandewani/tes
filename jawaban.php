<?php  
	include("koneksi.php");

	$id=$_GET['id'];
	session_start();
	$id_user=$_SESSION['id_user'];
	$jawaban=$_POST['jawaban'];

	$q="INSERT INTO `jawaban` VALUES ('','$id_user','$id','$jawaban',)";
	$qe=mysql_query($q);

	$id++;

	if ($id==6) {
		header('location:kesimpulan.php');
		exit;
	} else{
		header('location:pertanyaan.pph?id='.$id.'');
		exit;
	}
?>