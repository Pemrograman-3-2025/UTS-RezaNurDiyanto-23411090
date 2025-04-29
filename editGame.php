<?php
include "connection.php";
$idGame = $_GET['idGame'];
$sql = "SELECT * FROM tb_game WHERE id_game = $idGame";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top Up Game Apps</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body id="body">
    <div class="container mb-5 mt-5">
        <p class="h1 fw-bolder text-center text-light">Edit Data Game</p>
    </div>
    <form action="prosesEditGame.php?idGame=<?= $idGame ?>" method="POST">
        <div class="container pt-4">
            <div class="row">
                <div class="col-3">
                    <label for="game_name" class="form-label text-light">Nama Game</label>
                </div>
                <div class="col-9">
                    <input type="text" id="game_name" class="form-control bg-secondary text-light bg-secondary" name="game_name" placeholder="Masukkan Nama Game yang baru" required>
                </div>
            </div>
        </div>
        <div class="container pt-4">
            <div class="row">
                <div class="col-3">
                    <label for="pembuat_game" class="form-label text-light">Nama Pembuat Game</label>
                </div>
                <div class="col-9">
                    <input type="text" id="pembuat_game" class="form-control bg-secondary text-light bg-secondary" name="pembuat_game" placeholder="Masukkan Nama Pembuat / Nama Perusahaan Game yang baru" required>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-3">
                    <label for="tahun_rilis" class="form-label text-light">Tahun Rilis</label>
                </div>
                <div class="col-3">
                    <input type="number" id="tahun_rilis" class="form-control bg-secondary text-light" name="tahun_rilis" placeholder="Masukkan Tahun Rilis yang baru" required>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-3">
                    <label for="deskripsi_game" class="form-label text-light">Deskripsi</label>
                </div>
                <div class="col-9">
                    <textarea class="form-control bg-secondary form-check-inline text-light" id="deskripsi_game" rows="3" placeholder="Masukkan Deskripsi Tentang Game yang baru" name="deskripsi_game"></textarea>
                </div>
            </div>
        </div>
        <div class="container mb-5 mt-5 text-end">
            <button class="btn btn-danger m-4" type="button" onclick="resetForm()">Batal</button>
            <script>
                function resetForm() {
                    document.querySelectorAll('input, textarea').forEach(element => {
                        if (element.type === 'radio') {
                            element.checked = element.defaultChecked;
                        } else {
                            element.value = '';
                        }
                    });
                }
            </script>
            <button class="btn btn-primary" type="submit">Edit</button>
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>