<?php
	
	include 'config.php';

	if (isset($_POST['kirim'])) {

		$tanggal = date('Y-m-d');
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$Komentar = $_POST['Komentar'];
		
		
		$sql = "INSERT INTO komentar (tanggal, nama, email, Komen)
		VALUES ('$tanggal', '$nama', '$email', '$Komentar')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="warna6.css">
	<title>SARAN</title>
</head>
<body>
<header class="showcase">
    <div class="showcase-top">
      <a href="kerjaprojek.php" class="btn btn-rounded">HOME</a>
    </div>
	<div style="display: flex; width: 100%; justify-content: center; flex-direction: column; align-items: center;">
		<div class="wrapper">
			<form action="" method="post" class="form">
				<input type="text" class="nama" name="nama" placeholder="Nama">
				<br>
				<input type="text" class="email" name="email" placeholder="email">
				<br>
				<textarea name="Komentar" cols="30" rows="10" class="Komentar" placeholder="Komentar"></textarea>
				<br>
				<button type="submit" class="btn" name="kirim">KIRIM</button>
			</form>
		</div>
</body>
</html>