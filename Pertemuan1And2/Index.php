<?php

// Pertemuan 1 And 2 - PHP DASAR

// Kommentar

// Ini Adalah Kommentar
# Ini Adalah Kommentar
/* Ini Kommentar Banyak
halo1
halo2 */

// Standar Output

// echo, print
// print_r
// var_dump

// String

echo "Rani Belajar PHP <br>";
print "Rani Belajar PHP <br>";
print_r("Rani Belajar PHP <br>");
var_dump("Rani Belajar PHP <br>");

// Bool

echo true, "<br>";
echo false, "<br>";
var_dump(false); 

// Angka
echo 123, "<br>";

// Penulisan Sintaks PHP

// 1. PHP di dalam HTML
// 2. HTML Di Dalam PHP

// Variable dan Tipe Data

// Variable

// Tidak Boleh Diawali Dengan Angka, Tapi Boleh Mengandung Angka
$nama = "Rani";

echo "Halo, Nama Saya $nama <br>";
echo 'Halo, Nama Saya $nama <br>';

// Operator

// Aritmatika

// + - * / %
$x = 10;
$y = 50;
echo $x * $y;

// Penggabung String / Concatenation / concat 

// .
$nama_depan = "Kirania";
$nama_belakang = "Kharisa";
echo $nama_depan . " ". $nama_belakang;

// Assignment
// =, -=, +=, *=, /=, %=, .=

$x = 1;
$x += 5;
echo $x;
echo "<br>";

$nama = "Kirania";
$nama .= " ";
$nama .= "Kharisa";
echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
/*
var_dump(1 < 5);
echo "<br>";
var_dump(1 > 5);
echo "<br>";
var_dump(1 == 5);
echo "<br>";
var_dump(1 > "1");
echo "<br>";
var_dump(1 != 5);
echo "<br>";
*/

// Identitas
// ===, !==,
// var_dump(1 === '1');
// echo "<br>";

// Logika
// &&, ||, !

/*
$x = 30;
var_dump($x < 20 && $x % 2 == 0);
echo "<br>";

$x = 30;
var_dump($x < 20 || $x % 2 == 0);
echo "<br>";
*/

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
  </head>
  <body>
    <h1>Halo Selamat Datang <?php echo $nama; ?></h1>
    <?php 
    echo '<h1>Halo Kirania</h1>';
    ?>
  </body>
</html>