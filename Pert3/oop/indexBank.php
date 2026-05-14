<?php

require 'Bank.php'; // memanggil file class Bank

// membuat object dari class Bank

$n1 = new Bank('001','Siti',5000000);  // membuat nasabah 1
$n2 = new Bank('002','Andi',7000000);  // membuat nasabah 2
$n3 = new Bank('003','Dede',3000000);  // membuat nasabah 3
$n4 = new Bank('004','Didin',1000000); // membuat nasabah 4

// melakukan transaksi setor uang

$n1->setor(4000000); // Siti menambah saldo
$n3->setor(1000000); // Dede menambah saldo

// melakukan transaksi ambil uang

$n1->ambil(6000000); // Siti mengambil saldo
$n2->ambil(2000000); // Andi mengambil saldo

// menampilkan judul

echo "<h3>".Bank::BANK."</h3>"; // memanggil konstanta BANK

// menampilkan data nasabah

$n1->cetak(); // menampilkan data Siti
$n2->cetak(); // menampilkan data Andi
$n3->cetak(); // menampilkan data Dede

// menampilkan jumlah nasabah

echo "Jumlah Nasabah : ".Bank::$jml." orang"; // memanggil property static