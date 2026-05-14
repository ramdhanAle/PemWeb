<?php
session_start();
include_once 'koneksi.php';
// Load Models agar bisa digunakan di seluruh halaman
include_once 'models/Member.php';
// Tambahkan model untuk tugas My Studies
include_once 'models/Level.php';
include_once 'models/Study.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alee - Personal Web</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    body {
      background-color: #121212;
      /* Hitam pekat background */
      color: #e0e0e0;
      /* Tulisan abu-abu terang */
    }

    .main-content {
      background: #1e1e1e !important;
      /* Area konten hitam abu */
      color: white;
      border: 1px solid #333;
    }

    .table {
      color: white;
    }

    .card {
      background-color: #1e1e1e;
      border: 1px solid #333;
    }

    .list-group-item {
      background-color: #1e1e1e;
      color: #ccc;
      border-color: #333;
    }

    .list-group-item:hover {
      background-color: #333;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0">
        <?php include_once 'header.php'; ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 p-0">
        <?php include_once 'menu.php'; ?>
      </div>
    </div>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-9">
          <div class="main-content shadow-sm">
            <?php
            // Logika Mapping Halaman (Halaman Dinamis)
            if (isset($_GET['hal'])) {
              $req = $_GET['hal'];
              // Cek apakah filenya ada sebelum di-include
              if (file_exists($req . '.php')) {
                include_once $req . '.php';
              } else {
                echo "<div class='alert alert-danger'>Halaman <b>$req.php</b> belum dibuat atau tidak ditemukan!</div>";
              }
            } else {
              include_once 'home.php';
            }
            ?>
          </div>
        </div>

        <div class="col-md-3">
          <?php include_once 'sidebar.php'; ?>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-12 p-0">
        <?php include_once 'footer.php'; ?>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>