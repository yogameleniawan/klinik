<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "klinik_kesehatan");

$id_user = $_POST['id_user'];
$password = $_POST['password'];

$query = "SELECT * FROM pasien WHERE id_pasien='$id_user' AND password='$password'";
$result = mysqli_query($connect, $query);
$pasien = mysqli_num_rows($result);

$query1 = "SELECT * FROM dokter WHERE id_dokter='$id_user' AND password='$password'";
$result1 = mysqli_query($connect, $query1);
$dokter = mysqli_num_rows($result1);

$query2 = "SELECT * FROM petugas WHERE id_petugas='$id_user' AND password='$password'";
$result2 = mysqli_query($connect, $query2);
$petugas = mysqli_num_rows($result2);

if ($pasien) {
	$roles = "Pasien";
	$_SESSION['id_user'] = $id_user;
	$_SESSION['role'] = $roles;
	header("Location: home.php");
	exit(); ?>
	<?php
} else if ($dokter) {
	$roles = "Admin";
	$_SESSION['id_user'] = $id_user;
	$_SESSION['role'] = $roles;
	header("Location: index.php");
	exit(); ?>
	<?php
} else if ($petugas) {
	$roles = "Admin";
	$_SESSION['id_user'] = $id_user;
	$_SESSION['role'] = $roles;
	header("Location: index.php");
	exit(); ?>
	<?php
} else {
	$log = "false";
	header("Location: login.php?log=" . $log . "");
	exit(); ?>
	<?php
	echo mysqli_error($connect);
}

	?>