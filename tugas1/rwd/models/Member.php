<?php
class Member
{
	private $koneksi;

	public function __construct()
	{
		global $dbh; // Mengambil variabel koneksi $dbh dari koneksi.php
		$this->koneksi = $dbh;
	}

	// Fungsi untuk validasi login
	public function cekLogin($data)
	{
		// $data berisi [username, password]
		$sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(?))";

		/* Catatan: 
           SHA1(MD5()) adalah contoh enkripsi bertingkat yang sering diajarkan di praktikum. 
           Pastikan di database kamu, passwordnya juga diinsert dengan cara yang sama.
        */

		$ps = $this->koneksi->prepare($sql);
		$ps->execute($data);
		return $ps->fetch(); // Mengembalikan data user jika ditemukan, atau false jika gagal
	}

	// Fungsi tambahan jika ingin menampilkan semua member (opsional)
	public function index()
	{
		$sql = "SELECT * FROM member";
		$ps = $this->koneksi->prepare($sql);
		$ps->execute();
		return $ps->fetchAll();
	}
}
