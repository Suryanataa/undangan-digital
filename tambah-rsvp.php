<?php
// koneksi
include "koneksi.php";

// menangkap data dari form

$nama = $_POST['nama-rsvp'];
$kehadiran = $_POST['kehadiran'];


// kirim data ke db
mysqli_query($conn,"INSERT INTO rsvp VALUES ('$nama','$kehadiran')");


header("Location: rsvp.php");
?>