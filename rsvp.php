<?php  
include "./koneksi.php"; 
$query = mysqli_query($conn,"SELECT * FROM pesan"); 
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
    <div class="bg-sampul">
        <div class="container">
            <button class="btn text-white"
                style="z-index: 100; right:15px; bottom:200px; position:fixed; background-color:rgb(154, 108, 7)"
                onclick="toggleMusic()" id="btn-playback" data-play="false">
                <i class="fa fa-play"></i>
                <span id="btn-text">PAUSE</span>
            </button>
            <div class="row d-flex justify-content-center">
                <div class="card-rsvp">
                    <div class="card-body px-1">
                        <div class="col-12 mb-3">
                            <div class="judul-rsvp">RSVP</div>
                        </div>
                        <div class="card mb-4" style="border-radius: 18px">
                            <form action="tambah-rsvp.php" method="post">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="nama-rsvp" class="form-label fw-semibold">nama:</label>
                                        <input type="text" class="form-control" id="nama-rsvp" name="nama-rsvp"
                                            placeholder="nama pengirim" />
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
            <div class="row d-flex justify-content-center" style="padding: 0 0 100px">
                <div class="card-rsvp">
                    <div class="card-body px-1">
                        <div class="col-12 mb-3">
                            <div class="judul-rsvp">kirim pesan & doa untuk kedua mempelai</div>
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
                                    <button type="submit" class="btn btn-coklat text-white"
                                        style="border-radius: 18px; width: 100px">kirim</button>
                                </div>
                            </form>
                        </div>
                        <?php 
						$no = 0;
						$query = mysqli_query($conn,"SELECT * FROM pesan");
						while ($data = mysqli_fetch_object($query)){
							$no++;
						?>
                        <div class="isi-pesan mt-5 mb-5 border-top border-bottom pt-3 pb-4">
                            <h6 class="text-white">
                                nama:
                                <?= $data->nama?>
                            </h6>
                            <textarea class="form-control" id="pesan" name="pesan" rows="3"
                                readonly><?= $data->pesan?></textarea>
                        </div>
                        <?php
						}
						?>
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
        <audio id="audio" src="./Marry Your Daughter - Brian McKnight (animation)_jP6eEKrghGI.mp3" autoplay />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <script>
        const myAudio = document.getElementById("audio");
        const btn = document.getElementById("btn-playback");
        const btnIcon = document.querySelector("#btn-playback > i");
        const btnText = document.getElementById("btn-text");

        const toggleMusic = () => {
            const dataPlay = btn.getAttribute("data-play");

            if (dataPlay === "false") {
                btn.setAttribute("data-play", "false");
                myAudio.pause();
                btnIcon.classList.remove("fa-pause");
                btnIcon.classList.add("fa-play");
                btnText.innerText = "PLAY";
            } else {
                btn.setAttribute("data-play", "true");
                myAudio.play();
                btnIcon.classList.remove("fa-play");
                btnIcon.classList.add("fa-pause");
                btnText.innerText = "PAUSE";
            }
        };

        myAudio.onpause = () => {
            btn.setAttribute("data-play", "false");
            myAudio.pause();
            btnIcon.classList.remove("fa-pause");
            btnIcon.classList.add("fa-play");
            btnText.innerText = "PLAY";
        };
        </script>
    </div>
</body>

</html>