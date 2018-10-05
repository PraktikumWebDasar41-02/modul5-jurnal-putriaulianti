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
				<td><?php echo $nama ?></td>
			</tr>
			<tr>
				<td>Komentar</td>
				<td><input type="text" name="komentar"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>

<?php
	$data = mysqli_connect('localhost','root','','d_modul5');

	session_start();
	$nim = $_SESSION['nim'];
	$nama = $_SESSION['nama'];
	$email = $_SESSION['email'];
	$jika = "SELECT nama WHERE nim='$nim'";
	$sql = mysqli_query($data, $jika);

	if($sql) {
		echo $sql;
	}

	if(isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$komentar = $_POST['komentar'];

		mysqli_query($conn,"INSERT INTO t_jurnal1 VALUES('','$nama','','$komentar')");
		header("Location: 2.php");
	}
?>