<?php

require_once 'Person.php'; // memanggil class Person

// class Dosen mewarisi class Person
class Dosen extends Person{

public $nidn; // property NIDN dosen
public $gelar; // property gelar dosen

// constructor
public function __construct($nama,$gender,$nidn,$gelar){

parent::__construct($nama,$gender); // memanggil constructor parent

$this->nidn = $nidn; // mengisi NIDN
$this->gelar = $gelar; // mengisi gelar

}

// method cetak
public function cetak(){

parent::cetak(); // memanggil method cetak dari class parent

echo "<br>NIDN : ".$this->nidn;
echo "<br>Gelar : ".$this->gelar;

echo "<hr>";

}

}