<?php
$mahasiswa= [
    ["Nama" => "Yogi Sasmita" ,
    "NIM" => "21520007" ,
    "Jurusan" =>  "Teknologi Informasi",
    "Gambar" => "Yogi.jpeg"
    ],
    
    ["Nama" => "Lia" ,
    "NIM" => "21510007" ,
    "Jurusan" => "Sistem Informasi",
    "Gambar" => "Lia.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latian Get</title>
</head>
<body>
 <h1>Data mahasiswa</h1>
<ul>
 <?php foreach ($mahasiswa as $mhs):?>
    <li>
        <a
         href= "latian3.php?Nama=<?= $mhs["Nama"] ; ?>&NIM= <?= $mhs["NIM"] ;?>&Jurusan= <?= $mhs["Jurusan"] ;?>&Gambar= <?= $mhs["Gambar"];?>"><?= $mhs ["Nama"]; ?></a>
    </li>
<?php endforeach; ?>
 </ul> 
</body>
</html>