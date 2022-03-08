<?php
if(isset($_POST["submit"])){
if($_POST["username"] == "admin" && $_POST["password"] == "111201"){
    header("location: admin.php");
    exit;
}else
$eror = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman login</title>
</head>
<body>
    <h1>LOGIN ADMIN</h1>
    <?php if (isset($eror)) : ?>
    <p>pasaword / username anda masukan salah</p>
    <?php endif;?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">username : </label>
                <input type="text" Name="username" id="username" >
             </li>
             <li>
                <label for="password">password : </label>
                <input type="password" Name="password" id="password" >   
            </li>
            <li>
                <button type="submit" name="submit">LOGIN</button>
            </li>
        </form>
    </ul>
</body>
</html>