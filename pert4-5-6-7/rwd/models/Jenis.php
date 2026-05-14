<?php
class Jenis
{
    // member 1: variabel (property) untuk menyimpan koneksi database
    private $koneksi;

    // member 2: konstruktor (otomatis dijalankan saat object dibuat)
    public function __construct()
    {
        global $dbh; // ambil variabel $dbh dari file koneksi.php (koneksi database)
        $this->koneksi = $dbh; // simpan koneksi ke dalam property class
    }

    // member 3: fungsi untuk mengambil semua data jenis (READ)
    public function index()
    {
        $sql = "SELECT * FROM jenis"; // query untuk mengambil semua data dari tabel jenis
        $rs = $this->koneksi->query($sql); // jalankan query ke database
        return $rs; // kembalikan hasil query (result set)
    }
}

