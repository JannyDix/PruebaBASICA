<?php
    include("conn.php");
    $sql = "SELECT * FROM Users;";
    $res = mysqli_query($conexion,$sql);

    while ($row = mysqli_fetch_assoc($res)) {
    echo 'Usuario:'.$row['username'].'<br>';
    echo 'Nombre:'.$row['name'].'<br><br><br>';
    }
?>