<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	$query = mysqli_query($con, "delete from dosen where id = '".$_GET['iD']."'");
	header("location:index.php?id=".base64_encode(2));

?>