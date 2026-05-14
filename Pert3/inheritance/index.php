<?php

require_once 'Dosen.php'; // memanggil class Dosen
require_once 'Mahasiswa.php'; // memanggil class Mahasiswa

// membuat object dosen

$d1 = new Dosen('Budi','L','111','S.Kom, M.Kom');
$d2 = new Dosen('Siti','P','112','S.T, M.T');

// membuat object mahasiswa

$m1 = new Mahasiswa('Deden','L',3,'TI');
$m2 = new Mahasiswa('Mimin','P',5,'SI');

// memasukkan semua object ke dalam array

$data = [$d1,$d2,$m1,$m2];

// menampilkan judul

echo "<h3>Data Civitas Kampus</h3>";

// menampilkan semua data menggunakan perulangan

foreach($data as $d){

    $d->cetak(); // memanggil method cetak setiap object
    
}