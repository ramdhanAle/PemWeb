<?php
require_once 'dosen.php';
require_once 'mahasiswa.php';

//buat objek 
$d1 = new Dosen("123456789", "Dr.", "Ahmad", "Laki-laki");
$d2 = new Dosen("987654321", "Prof.", "Rahmat", "Laki-laki");
$m1 = new Mahasiswa("5", "Teknik Informatika", "Agung", "Laki-laki");
$m2 = new Mahasiswa("3", "Sistem Informasi", "Ajeng", "Perempuan");

$data = [$d1, $d2, $m1, $m2];

echo '<h3> Data Civitas Akademik </h3>';
echo '<p>';
foreach ($data as $d) {
    echo $d->cetak();
}

?>