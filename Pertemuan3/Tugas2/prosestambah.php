<!DOCTYPE html>
<html>
<head>
	<title>Simpan Data Mahasiswa</title>
</head>
<body>

<?php 

$nrp = $_POST["nrp"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$jurusan = $_POST["jurusan"];

$conn=mysqli_connect("localhost", "root", "")
or die("koneksi gagal");
mysqli_select_db($conn, "mahasiswanew");
echo "NRP			: $nrp <br>";
echo "Nama			: $nama <br>";
echo "Alamat		: $alamat <br>";
echo "Jurusan		: $jurusan <br>";

$sqlstr="INSERT INTO mahasiswa (nrp, nama, alamat, jurusan) VALUES ('$nrp', '$nama', '$alamat', '$jurusan')";
$hasil=mysqli_query($conn, $sqlstr);
echo "<h3>Simpan Data Mahasiswa berhasil dilakukan!</h3>";

?>

</body>
</html>