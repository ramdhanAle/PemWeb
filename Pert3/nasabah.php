<?php
require('bank.php');

$n1 = new Bank("1234567890", "Ahmad", 1000000);
$n2 = new Bank("0987654321", "Budi", 2000000);
$n3 = new Bank("1122334455", "Cici", 1500000);

//panggil 
$n1-> setor(500000);
$n3-> setor(100000);

$n1-> tarik(200000);
$n2 -> tarik (100000);

echo '<h2 align="center">' .Bank::BANK.'</h2>';
$n1->cetak();
$n2->cetak();
$n3->cetak();
echo 'Jumlah Nasabah : ' . Bank::$jml. ' orang' . '<hr>';