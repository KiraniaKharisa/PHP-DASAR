<?php

/*
 $mahasiswa = [
  ["Rani", "0363646373", "Teknik Informatika", "Rani@gmail.com"],
  ["Kirania", "67474664", "Teknik Ilmu Komunikasi", "kirania@gmail.com"],
  ["Kharisa", "7454746", "Teknik Nuklir", "kharisa@gmail.com"],
]; */

// Array Associative 
// definisinya sama seperti array numerik, kecuali
// Key-nya Adalah String Yang Kita Buat Sendiri
$mahasiswa = [
  [
  "nama" => "Rani",
  "nrp" => "0363646373",
  "Teknik" => "Teknik Informatika",
  "Email" => "Rani@gmail.com",
  "gambar" => "aku.jpg"
  ],
    [
  "nama" => "Black",
  "nrp" => "67474664",
  "Teknik" => "Teknik Ilmu Komunikasi",
  "Email" => "kirania@gmail.com",
  "gambar" => "aku.jpg"
  ],
    [
  "nama" => "Kharisa",
  "nrp" => "7454746",
  "Teknik" => "Teknik Nuklir",
  "Email" => "kharisa@gmail.com",
  "gambar" => "aku.jpg"
  ]
];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <style type="text/css" media="all">
      body {
        background-color: #004a5d;
        color: white;
        margin: 50px;
      }
      li {
        font-size: 15px;
      }
    </style>
    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
    <h1>Daftar Mahasiswa Heker</h1>
    
<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
<li>
  <img src="img/<?= $mhs["gambar"]; ?>" width="100px" height="100px">
</li>
<li>NAMA : <?= $mhs["nama"] ?></li>
<li>NRP : <?= $mhs["nrp"] ?></li>
<li>TEKNIK : <?= $mhs["Teknik"] ?></li>
<li>EMAIL : <?= $mhs["Email"] ?></li>
    </ul>
<?php endforeach; ?>
    
  </body>
</html>