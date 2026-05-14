<?php
echo "<h1>Praktikum Looping</h1>"; // Menampilkan judul utama
echo "<hr>"; // Membuat garis horizontal


// FOR
echo "<h2>1. Looping For (1 - 10)</h2>"; // Judul bagian for
for ($i = 1; $i <= 10; $i++) { // Perulangan dari 1 sampai 10, increment +1
    echo "Bilangan ke-$i <br>"; // Menampilkan nilai $i setiap perulangan
}
echo "<br>"; // Memberi jarak baris

for ($j = 10; $j >= 1; $j--) { // Perulangan dari 10 turun ke 1, decrement -1
    echo "Angka ke-$j <br>"; // Menampilkan nilai $j setiap perulangan
}
echo "<hr>"; // Garis pemisah


// WHILE
echo "<h2>2. Looping While (Genap & Ganjil)</h2>"; // Judul bagian while
$x = 2; // Nilai awal untuk bilangan genap
$y = 1; // Nilai awal untuk bilangan ganjil

while ($y <= 10) { // Perulangan selama $y kurang dari atau sama dengan 10
    echo "Bilangan Ganjil: $y <br>"; // Menampilkan bilangan ganjil
    $y += 2; // Menambahkan 2 agar tetap ganjil
}
echo "<br>"; // Jarak baris

while ($x <= 10) { // Perulangan selama $x kurang dari atau sama dengan 10
    echo "Bilangan Genap: $x <br>"; // Menampilkan bilangan genap
    $x += 2; // Menambahkan 2 agar tetap genap
}
echo "<hr>"; // Garis pemisah


// DO WHILE
echo "<h2>3. Looping Do While (Turun 1-10)</h2>"; // Judul bagian do while
$z = 1; // Nilai awal perulangan

do {
    echo '<br/>' . $z; // Menampilkan nilai $z
    $z++; // Menambahkan 1 setiap perulangan
} while ($z <= 10); // Kondisi dicek setelah blok dijalankan

echo "<hr>"; // Garis pemisah
?>