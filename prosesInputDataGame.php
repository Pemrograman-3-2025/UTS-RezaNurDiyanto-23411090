<?php

include "connection.php";


$name_game = $_POST['game_name'];
$pembuat_game = $_POST['pembuat_game'];
$tahun_rilis = $_POST['tahun_rilis'];
$deskripsi_game = $_POST['deskripsi_game'];

$sql = "INSERT INTO tb_game (game_name, pembuat_game, tahun_rilis, deskripsi_game) VALUE ('$name_game', '$pembuat_game', '$tahun_rilis', '$deskripsi_game')";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>
            alert ('Input Succes')
            window.location = 'dataGame.php'
            </script>";
} else {
    echo "<script>
            alert ('Failed !!!')
            window.location = 'inputDataGame.php'
            </script>";
}
