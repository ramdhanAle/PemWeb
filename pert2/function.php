<?php
echo "<h1>Praktikum Function</h1>"; // Menampilkan judul utama
echo "<hr>"; // Membuat garis horizontal

/* ===============================
   FUNCTION BUILT-IN STRING
================================ */
// Membuat variabel bertipe string
$str = 'Belajar PHP di Kampus Merdeka Asyiik';
echo "<h2>Function Built-in String</h2>";

// strtoupper() → mengubah semua huruf menjadi kapital
echo strtoupper($str);

// strtolower() → mengubah semua huruf menjadi kecil
echo '<br/>' . strtolower($str);

// ucfirst() → mengubah huruf pertama menjadi kapital
// strtolower() digunakan dulu agar hasil lebih konsisten
echo '<br/>' . ucfirst(strtolower($str));

// ucwords() → mengubah huruf pertama setiap kata menjadi kapital
echo '<br/>' . ucwords(strtolower($str));
echo '<hr/>';


/* ===============================
   ARRAY + SORTING
================================ */
// Membuat array satu dimensi
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu', 'Apel'];
echo "<h2>Sorting Array</h2>";

// sort() → mengurutkan array dari A-Z (ascending)
sort($ar_buah);
echo "<b>Sort (Ascending):</b>";
foreach ($ar_buah as $buah) {
    echo '<br/>' . $buah; // Menampilkan hasil urutan naik
}
echo '<hr/>';

// arsort() → mengurutkan array dari Z-A (descending)
arsort($ar_buah);
echo "<b>Arsort (Descending):</b>";
foreach ($ar_buah as $buah) {
    echo '<br/>' . $buah; // Menampilkan hasil urutan turun
}
echo '<hr/>';


/* ===============================
   FUNCTION VOID
================================ */
// Function void → tidak mengembalikan nilai (tidak pakai return)
function salam()
{
    echo 'Selamat Pagi Teman-teman'; // Langsung menampilkan teks
}

// Function dengan parameter
function sapa($kawan)
{
    echo '<br/>Selamat Pagi ' . $kawan; // Menggunakan parameter
}

// Function dengan parameter default
function kabar($kawan = 'Budi')
{
    echo '<br/>Hai Apa Kabar ' . $kawan . '?';
}

echo "<h2>Function Void</h2>";
// Memanggil function
salam();

$nama = 'Deden';
sapa($nama); // Mengirim variabel sebagai argument
kabar(); // Tanpa parameter → menggunakan nilai default
kabar('Ahmad'); // Mengirim parameter baru
kabar('Alex');  // Mengirim parameter baru
echo '<hr/>';


/* ===============================
   FUNCTION RETURN
================================ */
// Function return → mengembalikan nilai dengan return
function tambah($a, $b)
{
    return $a + $b; // Mengembalikan hasil penjumlahan
}

echo "<h2>Function Return</h2>";
$x = 10;
$y = 20;

// Memanggil function langsung dengan angka
echo 'Hasil 50 + 30 = ' . tambah(50, 30);

// Memanggil function dengan variabel
echo "<br/>Hasil $x + $y = " . tambah($x, $y);
echo '<hr/>';