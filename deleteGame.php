<?php
include "connection.php";

$idGame = $_GET['idGame'];
$sql = "DELETE FROM tb_game WHERE id_game = $idGame";
$query = mysqli_query($conn, $sql);
if ($query) {
    echo "<script>
            alert ('Deleted Success')
            window.location = 'dataGame.php'
            </script>";
} else {
    echo "<script>
            alert ('Deleted Failed !!!')
            window.location = 'dataGame.php'
            </script>";
}
