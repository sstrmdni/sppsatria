<?php

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];

include 'koneksi.php';
$sql = "SELECT * FROM siswa WHERE nisn = '$nisn' AND nis = '$nis'";
$query = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($query) > 0) {
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['nisn'] = $data['nisn'];

    header('location:siswa/siswa.php');
}
