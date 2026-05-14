<?php

class Gempa{

// property lokasi gempa
private $lokasi;

// property skala gempa
private $skala;

// constructor untuk mengisi data saat object dibuat
public function __construct($lokasi,$skala){

$this->lokasi = $lokasi; // mengisi lokasi gempa
$this->skala = $skala;   // mengisi skala gempa

}

// method private untuk menentukan dampak gempa
private function dampak($skala){

// jika skala antara 0 sampai 2
if($skala >=0 && $skala <=2)
$dampak = "Tidak Terasa";

// jika skala antara 2 sampai 4
elseif($skala >2 && $skala <=4)
$dampak = "Bangunan retak-retak";

// jika skala antara 4 sampai 6
elseif($skala >4 && $skala <=6)
$dampak = "Bangunan roboh";

// jika skala lebih dari 6
else
$dampak = "Bangunan roboh dan berpotensi tsunami";

return $dampak; // mengembalikan nilai dampak

}

// method untuk menampilkan informasi gempa
public function cetak(){

echo "Lokasi : ".$this->lokasi; // menampilkan lokasi
echo "<br>Skala : ".$this->skala; // menampilkan skala
echo "<br>Dampak : ".$this->dampak($this->skala); // memanggil fungsi dampak
echo "<hr>"; // garis pemisah

}

}