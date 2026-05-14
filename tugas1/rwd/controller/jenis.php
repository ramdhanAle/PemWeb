<?php
include_once '../koneksi.php'; // memanggil file koneksi database (mengambil variabel $dbh)

// menangkap nilai dari tombol submit (name="proses")
$proses = $_POST['proses'];

if ($proses == "simpan") { // cek apakah tombol yang ditekan adalah "simpan"

    $nama = $_POST['nama']; // ambil data input nama dari form

    // query untuk menyimpan data ke tabel jenis
    // tanda (?) adalah placeholder untuk keamanan (anti SQL Injection)
    $sql = "INSERT INTO jenis (nama) VALUES (?)";

    // prepare statement → menyiapkan query sebelum dijalankan
    $ps = $dbh->prepare($sql);

    // execute → menjalankan query dengan data yang dikirim (array harus sesuai urutan ?)
    $ps->execute([$nama]);

    // redirect ke halaman daftar jenis setelah berhasil simpan
    header('Location: ../index.php?hal=jenis_list');

    // menghentikan eksekusi script setelah redirect
    exit;
}