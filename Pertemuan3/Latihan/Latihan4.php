<!DOCTYPE html>
<html>
<head>
	<title>Mysqli_fetch_assoc</title>
</head>
<body>

<?php

$koneksi=mysqli_connect("localhost", "root", "")
or die ("Koneksi Gagal");
mysqli_select_db($koneksi, "mahasiswa");
$hasil = mysqli_query($koneksi, "select * from informatika");
while ($row = mysqli_fetch_assoc($hasil)) {
	print_r($row);
}

?>

</body>
</html>