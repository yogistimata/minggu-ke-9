<?php
if(!isset($_POST["Nama"])){
    header("location: latian4.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil metode post</title>
</head>
<body>
    <h1>SELAMAT DATANG <? $_POST ["Nama"]?></h1>
</body>
</html>