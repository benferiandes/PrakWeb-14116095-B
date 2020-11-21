<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  

$cari=$_POST['cari'];
$conn=mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "mahasiswanew");
$hasil=mysqli_query($conn, "select * from mahasiswa");
$jumlah=mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah"; echo "<br>";
while ($baris = mysqli_fetch_array($hasil)) {
	echo "NRP : ";
	echo $baris[0];
	echo "<br>";
	echo "Nama : ";
	echo $baris[1];
	echo "<br>";
	echo "Alamat : ";
	echo $baris[2];
	echo "Alamat : ";
	echo $baris[3];
}

?>

</body>
</html>