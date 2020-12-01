<?php
include "koneksi.php";
$id = $_POST["id"];
$artikel= $_POST["artikel"];
$sql = "UPDATE artikel SET artikel = '$artikel' WHERE id_artikel = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
if($query){
	echo "Data berhasil diubah";
}else{
	echo "Error".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
