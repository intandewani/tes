<?php  
	include("koneksi.php");

	session_start();
	$id_user=$_SESSION['id_user'];

	$q="SELECT * FROM `jawaban` WHERE `jawaban`.`id_user`='$id_user'";
	$qe=mysql_query($q);

	$i=1;
	while ($de=mysql_fetch_array($qe)) {
		$nilai[$i]=$de['nilai'];
		$i++;
	}

	$a=$nilai[1];
	$b=$nilai[2];
	$c=$nilai[3];
	$d=$nilai[4];
	$e=$nilai[5];

	if ($a==1 AND $b==0 $c==0 AND $d==0) {
		echo "Kucing Kurang Gizi";
	} elseif ($a==0 AND $B==1 AND $c==0 AND $d==0) {
		echo "Kucing Kurang Gizi";
	} elseif ($a==0 AND $b==0 AND $c==1 AND $d==0) {
		echo "Kucing anda mengalami masalah pencernaan";
	} elseif ($a==0 AND $b==0 AND $c==0 AND $d==1) {
		echo "Kucing anda mengalami masalah pencernaan";
	} elseif ($a==1 AND $c==1 ) {
		echo "Kucing Anda Cacingan";
	} elseif ($a==1 AND $d==1) {
		echo "Kucing Anda Cacingan";
	} elseif ($e==1) {
		echo "Kucing Anda cacingan";
 	} else{
 		echo "Kucing anda dalam keadaan baik";
 	}
	 
?>