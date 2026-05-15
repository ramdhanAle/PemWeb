<?php

require_once 'Person.php'; // memanggil class Person

// class Mahasiswa mewarisi class Person
class Mahasiswa extends Person{

public $semester; // property semester
public $jurusan; // property jurusan

// constructor
public function __construct($nama,$gender,$semester,$jurusan){

parent::__construct($nama,$gender); // memanggil constructor parent

$this->semester = $semester; // mengisi semester
$this->jurusan = $jurusan; // mengisi jurusan

}

// method cetak
public function cetak(){

parent::cetak(); // memanggil method dari parent

echo "<br>Semester : ".$this->semester;
echo "<br>Jurusan : ".$this->jurusan;

echo "<hr>";

}

}