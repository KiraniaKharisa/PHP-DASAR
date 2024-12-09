<?php

$mahasiswa = [
  ["Rani", "0363646373", "Teknik Informatika", "rani@gmail.com"],
  ["Kirania", "67474664", "Teknik Ilmu Komunikasi", "kirania@gmail.com"],
  ["Kharisa", "7454746", "Teknik Nuklir", "kharisa@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
    <h1>Daftar Mahasiswa Heker</h1>
    
<?php foreach($mahasiswa as $mhs) : ?>
<ul>
  <li>Nama : <?= $mhs[0] ?></li>
  <li>NRP : <?= $mhs[1] ?></li>
  <li>Teknik : <?= $mhs[2] ?></li>
  <li>Email : <?= $mhs[3] ?></li>
</ul>
<?php endforeach; ?>

  </body>
</html>