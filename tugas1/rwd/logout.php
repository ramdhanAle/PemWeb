<?php
session_start();
session_destroy(); // Hapus session
header('location:index.php?hal=home'); // Balik ke Home
exit;
