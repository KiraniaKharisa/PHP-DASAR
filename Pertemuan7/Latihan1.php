<?php

/*
// Variabel Scope / Lingkup Variabel
$x = 10;

function tampilX()
{
  global $x;
  echo $x;
}

tampilX();
*/

// Variabel SuperGlobals
// Variabel Global Milik PHP 
// Merupakan Array Associative

// $_GET
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
        background-color: #75e3ff;
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
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
  <li><a href="latihan2.php?nama=<?= $mhs['nama'] ?>&nrp=<?= $mhs['nrp'] ?>&teknik=<?= $mhs['Teknik'] ?>&email=<?= $mhs['Email'] ?>&gambar=<?= $mhs['gambar'] ?>"><?= $mhs["nama"]; ?></a></li>
<?php endforeach; ?>
</ul>

  </body>
</html>