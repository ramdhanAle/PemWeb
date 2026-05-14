<?php
/* =========================================
   PRAKTIKUM FUNCTION - KALKULATOR SEDERHANA
========================================= */

// Function untuk melakukan operasi matematika
function hitung($a1, $a2, $operator)
{
    // Jika operator adalah penjumlahan
    if ($operator == '+') {
        return $a1 + $a2; // Mengembalikan hasil tambah
    }
    // Jika operator adalah pengurangan
    elseif ($operator == '-') {
        return $a1 - $a2; // Mengembalikan hasil kurang
    }
    // Jika operator adalah perkalian
    elseif ($operator == '*') {
        return $a1 * $a2; // Mengembalikan hasil kali
    }
    // Jika operator adalah pembagian
    elseif ($operator == '/') {
        // Validasi agar tidak membagi dengan 0
        if ($a2 == 0) {
            return "Tidak bisa dibagi 0"; // Pesan error sederhana
        }
        return $a1 / $a2; // Mengembalikan hasil bagi
    }
    // Jika operator tidak dikenali
    else {
        return 0; // Default nilai 0
    }
}
?>

<h1>Kalkulator Sederhana</h1> <!-- Judul halaman -->
<hr>
<!-- Form input angka -->
<form action="" method="POST">
    <!-- Input angka pertama -->
    Angka 1 :
    <input type="number" name="a1" required>
    <br><br>
    <!-- Input angka kedua -->
    Angka 2 :
    <input type="number" name="a2" required>
    <br><br>
    <!-- Tombol operasi (operator dikirim lewat name="operator") -->
    <button type="submit" name="operator" value="+">+</button>
    <button type="submit" name="operator" value="-">-</button>
    <button type="submit" name="operator" value="*">*</button>
    <button type="submit" name="operator" value="/">/</button>
</form>

<?php
// Mengecek apakah tombol operator sudah ditekan
if (isset($_POST['operator'])) {
    // Mengambil data dari form menggunakan metode POST
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $operator = $_POST['operator'];
    // Memanggil function hitung()
    $hasil = hitung($a1, $a2, $operator);
    // Menampilkan hasil perhitungan
    echo "<hr>";
    echo "<h3>Hasil: $hasil</h3>";
}
?>