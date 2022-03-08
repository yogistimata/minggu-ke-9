<?php
if(!isset($_GET["Nama"])){
    header("location: latian2.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
<ul>
    <li><img src="img/<?= $_GET["Gambar"]; ?>" ></li>
    <li><?= $_GET["Nama"]; ?></li>
    <li><?= $_GET["NIM"]; ?></li>
    <li><?= $_GET["Jurusan"]; ?></li>
</ul>
<a href= "latian2.php">Back To Menu </a>
</body>
</html>