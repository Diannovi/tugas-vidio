<?php 
$siswa = [
    ["Dian Novitasari", "852433671", "Rekayasa Perangkat Lunak",
             "diannovitasari0605@gmail.com"]
    ,["Griselda Galena", "952563338", "Rekayasa Perangkat Lunak",
             "Griselda08@gmail.com"]
    ,["Dara Izatul Mila", "839292883", "Rekayasa Perangkat Lunak",
             "daraizatul25@gmail.com"]
    ,["Astrid Octavian Syah", "84828447", "Rekayasa Perangkat Lunak",
             "astridoctavian29@gmail.com"]
    ,["Galih Januar Dwi Arianto", "84828447", "Rekayasa Perangkat Lunak",
             "galihjanuar22@gmail.com"]
            ];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
<h1>Daftar Siswa</h1>



<?php foreach ($siswa as $s) :?>
    
 <ul>
    <li>Nama    :<?= $s [0]; ?> </li>
    <li>NIK     : <?= $s [1]; ?> </li>
    <li>Jurusan : <?= $s [2]; ?> </li>
    <li>Email   :<?= $s [3]; ?> </li>
 </ul>
 <?php endforeach; ?>
</body>
</html>