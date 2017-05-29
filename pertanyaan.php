<?php  
	include("koneksi.php");
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
	$id=$_GET['id'];

	$q="SELECT * FROM `pertanyaan` WHERE `pertanyaan`.`id`='$id'";
	$qe=mysql_query($q);
	$de=mysql_fetch_array($qe);
	echo "
		<form method=\"post\" action=\"jawaban.php?id=".$id."\">
		<p>Pertanyaan".$id."</p>
		<p>".$de['pertanyaan']."</p>
		<input type=\"radio\" name=\"jawaban\" value=\"1\">Ya<br>
		<input type=\"radio\" name=\"jawaban\" value=\"0\">Tidak<br>
		<p><input type=\"submit\" value=\"submit\"></p>
		</form>
	";
?>

</body>
</html>