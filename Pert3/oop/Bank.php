<?php

class Bank{

// property untuk menyimpan nomor rekening (hanya bisa diakses class dan turunannya)
protected $norek;

// property nama nasabah (bisa diakses dari mana saja)
public $nama;

// property saldo (hanya bisa diakses di dalam class ini saja)
private $saldo;

// property static untuk menghitung jumlah nasabah
static $jml = 0;

// konstanta nama bank
const BANK = 'Bank Syariah Nurul Fikri';

// constructor akan otomatis dijalankan saat object dibuat
public function __construct($no, $nasabah, $saldo){

$this->norek = $no;       // mengisi nomor rekening
$this->nama = $nasabah;   // mengisi nama nasabah
$this->saldo = $saldo;    // mengisi saldo awal

self::$jml++;             // menambah jumlah nasabah setiap object dibuat

}

// method untuk menambah saldo
public function setor($uang){
$this->saldo += $uang;    // saldo ditambah dengan uang yang disetor
}

// method untuk mengambil saldo
public function ambil($uang){
$this->saldo -= $uang;    // saldo dikurangi uang yang diambil
}

// method untuk menampilkan data nasabah
public function cetak(){

echo "<b>".self::BANK."</b>"; // menampilkan nama bank
echo "<br>No Rekening : ".$this->norek; // menampilkan nomor rekening
echo "<br>Nama Nasabah : ".$this->nama; // menampilkan nama
echo "<br>Saldo : Rp ".number_format($this->saldo,0,',','.'); // menampilkan saldo dengan format rupiah

echo "<hr>"; // garis pemisah data

}

}