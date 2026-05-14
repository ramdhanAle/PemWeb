<?php

class Person{

// property nama
public $nama;

// property gender
public $gender;

// constructor untuk mengisi data
public function __construct($nama,$gender){

$this->nama = $nama; // mengisi nama
$this->gender = $gender; // mengisi gender

}

// method untuk menampilkan data
public function cetak(){

echo "Nama : ".$this->nama;
echo "<br>Gender : ".$this->gender;

}

}