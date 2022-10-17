<?php  
include "./koneksi.php"; 
$query = mysqli_query($conn,"SELECT * FROM rsvp"); 
$data = mysqli_fetch_array($query) 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>undangan pernikahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container2">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="card-rsvp">
                    <div class="card-body px-1">
                        <div class="col-12 mb-3">
                            <div class="judul-rsvp">kirim pesan untuk kedua mempelai</div>
                        </div>
                        <div class="card mb-4" style="border-radius: 18px">
                            <form action="tambah.php" method="post">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label fw-semibold">nama:</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="nama pengirim" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="pesan" class="form-label fw-semibold">pesan:</label>
                                        <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kehadiran" class="form-label fw-semibold">konfirmasi
                                            kehadiran:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kehadiran" id="kehadiran"
                                                value="Hadir" <?php echo ($data=='Hadir')?'checked':'' ?>>
                                            <label class="form-check-label" for="kehadiran"> Hadir </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kehadiran" id="kehadiran"
                                                value="Ragu" <?php echo ($data=='Ragu')?'checked':'' ?>>
                                            <label class="form-check-label" for="kehadiran"> Ragu </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kehadiran" id="kehadiran"
                                                value="Tidak Hadir" <?php echo ($data=='Tidak Hadir')?'checked':'' ?>>
                                            <label class="form-check-label" for="kehadiran"> Tidak Hadir </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-coklat text-white"
                                        style="border-radius: 18px; width: 100px">kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed-bottom">
            <div class="navigation">
                <ul class="d-flex ps-0 pt-5" style="list-style-type: none; justify-content: space-around">
                    <a href="pengantin.html" style="text-decoration: none">
                        <li class="navbar-item active">Pengantin</li>
                    </a>
                    <a href="jadwal.html" style="text-decoration: none">
                        <li class="navbar-item">Jadwal</li>
                    </a>
                    <a href="#" style="text-decoration: none">
                        <li class="navbar-item">RSVP</li>
                    </a>
                </ul>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>