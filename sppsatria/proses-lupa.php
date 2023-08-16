

<?php
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$id_spp = $_GET['id_spp'];

include 'koneksi.php';
$sql = "UPDATE petugas SET username='$username', password='$password', nama_petugas='$nama_petugas' WHERE username='$username' ";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:index2.php");
} else {
    echo "<script>
    alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('index2.php');
    </script>";
}
