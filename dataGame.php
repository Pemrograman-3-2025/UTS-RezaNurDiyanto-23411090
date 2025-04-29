<?php
include 'connection.php';
// $sql = "SELECT * FROM tb_caang";
$sql = "SELECT * FROM tb_game";

$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Game</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="body">
    <div class="container mt-5">
        <h1 class="text-center text-light">Data Game</h1>
    </div>
    </div>
    <div class="container-fluid mt-5 p-5">
        <table class="table table-hover table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Game</th>
                    <th scope="col">Nama Pembuat Game</th>
                    <th scope="col">Tahun Rilis</th>
                    <th scope="col">Tentang Game</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($data = mysqli_fetch_array($query)) : ?>
                    <tr>
                        <th scope="row"><?= $i = 1;
                                        $i++ ?></th>
                        <td><?= $data['game_name'] ?></td>
                        <td><?= $data['pembuat_game'] ?></td>
                        <td><?= $data['tahun_rilis'] ?></td>
                        <td><?= $data['deskripsi_game'] ?></td>
                        <td><a href="editGame.php?idGame=<?= $data['id_game'] ?>"><button class="btn btn-warning">Edit</button></a>
                            <a href="deleteGame.php?idGame=<?= $data['id_game'] ?>"><button onclick="return confirmDelete()" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>