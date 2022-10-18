<?php
// koneksi
include "koneksi.php";

// menangkap data dari form

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];


// kirim data ke db
mysqli_query($conn,"INSERT INTO pesan VALUES ('$nama','$pesan')");


header("Location: rsvp.php");
?>