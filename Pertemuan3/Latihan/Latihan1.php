<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQLi</title>
</head>
<body>

<h1>Demo Koneksi Database</h1>
<?php 

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

if (mysqli_connect_error()) {
	echo "Koneksi Database Gagal : " . mysqli_connect_error();
} else {
	echo "Sukses";
}

?>

</body>
</html>