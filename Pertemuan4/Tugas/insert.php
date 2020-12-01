<?php
include "koneksi.php";
$artikel = $_POST['artikel'];
$id = $_POST['id'];
$sql = "INSERT INTO artikel(id,artikel) VALUES('$id','$artikel')";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
if($query){
	echo "Data berhasil ditambahkan";
}else{
	echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
