<?php
include "koneksi.php";
$id = $_GET["hapus_id"];
$sql = "DELETE FROM artikel WHERE id_artikel = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
if($query){
	echo "Data berhasil dihapus";
}else{
	echo "Error".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
