<?php
//data awal
$nama = 'Asep';
$totalBelanja = 15000;
$nilai = 75;

//if else (total belanja)
if ($totalBelanja > 10000) {
    $ketBelanja = "Selamat $nama, Anda mendapatkan diskon 100%";
} else {
    $ketBelanja = "Terima kasih $nama, sudah belanja";
}

//ternary (kelulusan)
$ketLulus = ($nilai >= 60) ? "Lulus" : "Failed";

//if multi kondisi (grade)
if (($nilai >= 85) && ($nilai <= 100)) {
    $grade = "A";
} elseif (($nilai >= 70) && ($nilai < 85)) {
    $grade = "B";
} elseif (($nilai >= 60) && ($nilai < 70)) {
    $grade = "C";
} elseif (($nilai >= 30) && ($nilai < 60)) {
    $grade = "D";
} elseif (($nilai >= 0) && ($nilai < 30)) {
    $grade = "E";
} else {
    $grade = "-";
}

//switch case (predikat)
switch ($grade) {
    case "A":
        $predikat = "Fantastic";
        break;
    case "B":
        $predikat = "Excellent";
        break;
    case "C":
        $predikat = "Nice";
        break;
    case "D":
        $predikat = "Not Enough";
        break;
    case "E":
        $predikat = "Very Less";
        break;
    default:
        $predikat = "Try Again";
}

?>

<h3>Data Belanja</h3>
Nama Pelanggan : <?= $nama ?> <br>
Total Belanja : Rp.<?= $totalBelanja ?> <br>
Keterangan : <?= $ketBelanja ?>
<hr>

<h3>Data Nilai</h3>
Nama Siswa : <?= $nama ?> <br>
Nilai : <?= $nilai ?> <br>
Status : <?= $ketLulus ?> <br>
Grade : <?= $grade ?><br>
Predikat : <?= $predikat ?>