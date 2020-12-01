<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<?php
	include "koneksi.php";
	$id = $_GET["ubah_id"];
	$sql = "SELECT * FROM artikel WHERE id_artikel = '$id'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
	if(mysqli_num_rows($query) > 0){
		$data = mysqli_fetch_array($query);
	}
	?>

	<div class="col-md-8">
		<h3>Ubah Artikel</h3>
		<form action="update.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $data["id_artikel"];?>" >

            <label>Artikel :</label>
			<div class="form-group">
				<textarea name="artikel"  cols="60" rows="10"><?php echo $data["artikel"]; ?></textarea>
			</div>

			<button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
		</form>
	</div>
</body>
</html>
