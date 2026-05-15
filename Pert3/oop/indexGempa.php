<?php

require 'Gempa.php'; // memanggil class Gempa

// membuat object gempa

$g1 = new Gempa('Banten',0.1);     // gempa di Banten
$g2 = new Gempa('Tokyo',3.5);      // gempa di Tokyo
$g3 = new Gempa('Florida',5.1);    // gempa di Florida
$g4 = new Gempa('Tel Aviv',9.5);   // gempa di Tel Aviv

// menampilkan informasi gempa

$g1->cetak();
$g2->cetak();
$g3->cetak();
$g4->cetak();