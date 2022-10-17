<?php
// koneksi
include "koneksi.php";

// menangkap data dari form

$id = $_POST['id_pesan'];
$nama = $_POST['nama'];
$pesan  = $_POST['pesan'];
$kehadiran = $_POST['kehadiran'];


// kirim data ke db
mysqli_query($conn,"INSERT INTO rsvp VALUES ('','$nama','$pesan','$kehadiran')");


header("Location: rsvp.php");
?>