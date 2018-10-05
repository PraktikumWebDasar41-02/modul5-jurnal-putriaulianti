<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form method="POST">
			<tr>
				<td>Nama</td>
				<td></td>
			</tr>
			<tr>
				<td>Komentar</td>
				<td></td>
			</tr>
			<tr>
				<td>Jumlah Kata</td>
				<td></td>
			</tr>
		</form>
	</table>

</body>
</html>

<?php
	$data = mysqli_connect('localhost', 'root', '', 'd_modul5');

	session_start();
	session_start();
	$nim = $_SESSION['nim'];
	$nama = $_SESSION['nama'];
	$email = $_SESSION['email'];
	$jika = "SELECT nama WHERE nim='$nim'";
	$sql = mysqli_query($data, $jika);
?>