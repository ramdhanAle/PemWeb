<?php
echo "<h1>Praktikum Array</h1>"; // Menampilkan judul utama
echo "<hr>"; // Garis pemisah


/* =========================================
   ARRAY 1 DIMENSI
========================================= */
// Membuat array indexed (1 dimensi)
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu'];

// Mengubah isi index ke-2 (Pisang jadi Jeruk)
$ar_buah[2] = 'Jeruk';

// Menghapus data pada index ke-3 (Jambu)
unset($ar_buah[3]);

// Menambahkan data baru di posisi terakhir array
$ar_buah[] = 'Naga';

echo "<h2>Array 1 Dimensi</h2>";

echo "<h3>1. Cetak Index dan Value</h3>";
// foreach dengan key dan value
foreach ($ar_buah as $index => $buah) {
    echo "Index $index : $buah <br>"; // Menampilkan index dan isi array
}

echo "<br><h3>2. Cetak Key Saja</h3>";
// foreach hanya menampilkan key/index
foreach ($ar_buah as $id => $buah) {
    echo "Key: $id <br>"; // Menampilkan index saja
}

echo "<br><h3>3. Cetak Value Saja</h3>";
// foreach hanya menampilkan value
foreach ($ar_buah as $buah) {
    echo "Buah: $buah <br>"; // Menampilkan isi array saja
}

echo "<br><h3>4. Cetak Key dan Value</h3>";
// Menggabungkan key dan value dalam kalimat
foreach ($ar_buah as $id => $buah) {
    echo "Buah dengan id $id adalah $buah <br>";
}
echo "<hr>";


/* =========================================
   ARRAY ASSOCIATIVE
========================================= */
// Membuat array associative (key => value)
$b1 = ['kode' => 'a1', 'buah' => 'Apel', 'harga' => 25000];
$b2 = ['kode' => 'a2', 'buah' => 'Anggur', 'harga' => 45000];
$b3 = ['kode' => 'b1', 'buah' => 'Belimbing', 'harga' => 15000];

// Menggabungkan beberapa array menjadi array multidimensi
$buah2an = [$b1, $b2, $b3];

echo "<h2>Array Associative</h2>";

// Membuat tabel HTML
echo "<table border='1' cellpadding='5'>
<tr>
    <th>No</th>
    <th>Kode</th>
    <th>Nama</th>
    <th>Harga</th>
</tr>";

$no = 1; // Nomor urut
$total = 0; // Variabel untuk menjumlahkan total harga

// Perulangan untuk menampilkan isi array multidimensi
foreach ($buah2an as $b) {
    // Memberi warna selang-seling (ganjil-genap)
    $warna = $no % 2 == 1 ? 'khaki' : 'beige';

    // Menambahkan harga ke total
    $total += $b['harga'];
?>
    <!-- Menampilkan data dalam bentuk baris tabel -->
    <tr style="background-color: <?= $warna ?>">
        <td><?= $no ?></td> <!-- Menampilkan nomor urut -->
        <td><?= $b['kode'] ?></td> <!-- Menampilkan kode buah -->
        <td><?= $b['buah'] ?></td> <!-- Menampilkan nama buah -->
        <td>Rp <?= number_format($b['harga'], 0, ',', '.') ?></td>
        <!-- number_format digunakan untuk format rupiah -->
    </tr>
<?php
    $no++; // Increment nomor urut
}
?>

<!-- Baris untuk menampilkan total harga -->
<tr>
    <td colspan="3"><b>Total Harga</b></td>
    <td><b>Rp <?= number_format($total, 0, ',', '.') ?></b></td>
</tr>

</table>