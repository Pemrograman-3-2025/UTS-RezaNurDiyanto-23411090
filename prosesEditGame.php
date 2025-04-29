<?php

include "connection.php";

// "nama" diambil dari formInput.php - body - form - input - (name) = (nama)
$idGame = $_GET['idGame'];
$nama_game = $_POST['game_name'];
$pembuat_game = $_POST['pembuat_game'];
$tahun_rilis = $_POST['tahun_rilis'];
$deskripsi_game = $_POST['deskripsi_game'];


$sql = "UPDATE tb_game SET game_name = '$nama_game', pembuat_game = '$pembuat_game', tahun_rilis = '$tahun_rilis', deskripsi_game = '$deskripsi_game' WHERE id_game = '$idGame'";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>
            alert ('Edited Success')
            window.location = 'dataGame.php'
            </script>";
} else {
    echo "<script>
            alert ('Edited Failed !!!')
            window.location = 'editGame.php'
            </script>";
}
