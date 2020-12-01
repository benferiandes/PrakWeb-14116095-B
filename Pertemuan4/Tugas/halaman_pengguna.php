<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pengguna</title>
</head>
<body>
	<?php
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	?>
	<h1>Halaman Pengguna</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

	<p>==============================================================================</p>

	<?php $username = $_SESSION['username']; ?>

	<div class="col-md-8">

		<table class="table">
			<thead>
				<tr>

					<th>id Artikel</th>
					<th>Nama</th>
					<th>Artikel</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "koneksi.php";
				// $sql = "SELECT * FROM artikel ORDER BY id ASC";
				$sql = "SELECT artikel.id_artikel, artikel.artikel, pengguna.nama FROM artikel, pengguna WHERE artikel.id = pengguna.id AND pengguna.username LIKE '%$username%'";
				$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

				while($data = mysqli_fetch_array($query)){
				$id = $data["id_artikel"];
				$nama = $data["nama"];
				$artikel = $data["artikel"];

				echo "<tr>
				<td align='center'>$id</td>
				<td align='center'>$nama</td>
				<td>$artikel</td>
				<td>
					<a href='ubah-data.php?ubah_id=$id'>Ubah</a>
					<a href='delete.php?hapus_id=$id'>Hapus</a>
				</td>
				</tr>";

			}
			?>
		</tbody>
	</table>

	<br>
        <p>==============================================================================</p>

	<h4>TAMBAH DATA</h4>
		<form action="insert_pengguna.php" method="POST" enctype="multipart/form-data">
		   <input type="hidden" name="username" value="<?php echo $username;?>" >

			<label>Artikel :</label>
			<div class="form-group">
				<textarea name="artikel" id="" cols="60" rows="10"></textarea>
			</div>
			<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
            <button type="reset" name="hapus" class="btn btn-danger">Clear</button>
            <br>
            <br>
        </form>
		<br>
        <p>==============================================================================</p>

	 <a href="logout.php">LOGOUT</a>
	 <br>

</div>
</body>
</html>
