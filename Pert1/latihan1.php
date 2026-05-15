<?php
//variabel bawaan php
echo 'Dokumen saya di : ' . $_SERVER['DOCUMENT_ROOT'] . '<br/>';
echo '<br>Nama file : ' . $_SERVER['SCRIPT_FILENAME'] . '<br/>';
echo '<hr>';

//variabel konstanta
$jari2 = 15;
define('PHI', 3.14);
$luas = PHI * $jari2 * $jari2;
echo 'luas lingkaran dengan jari-jari $jari2 = $luas';
echo '<hr>';

//buat variabel
$nama_siswa = 'Budi Ritonga';
$umur = 17;
$bb = 75.6;
$job = 'Siswa';

//cetak variabel
echo 'Nama Siswa : ' . $nama_siswa. '<br/>';
?>
<ul>
    <li>Nama Siswa: <?php echo $nama_siswa; ?></li>
    <li>Umur: <?php echo $umur; ?> tahun</li>
    <li>Berat Badan: <?php echo $bb; ?> kg</li>
    <li>Pekerjaan: <?php echo $job; ?></li>
</ul>

<ul>
    <li>Nama Siswa: <?= $nama_siswa; ?></li>
    <li>Umur: <?= $umur; ?> tahun</li>
    <li>Berat Badan: <?= $bb; ?> kg</li>
    <li>Pekerjaan: <?= $job; ?></li>
</ul>

