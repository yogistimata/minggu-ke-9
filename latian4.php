<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metode post</title>
</head>
<body>
    <?php
    if (isset($_POST["submit"])) : ?>
    <h1>SELAMAT DATANG <? $_POST ["Nama"]; ?></h1>
    <?php endif;?>

    <form action="latian5.php" method="post">
        masukkan nama :
        <input type="text" Name="Nama">
        <br>
        <button type="submit" Name="submit">
            KIRIM

        </button>


    </form>
</body>
</html>