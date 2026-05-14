<nav class="navbar navbar-expand-lg bg-dark border-bottom border-secondary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="index.php?hal=home">
      <img src="img/cat.jpg" alt="Logo" width="40" class="rounded-circle me-2">
      Alee<span class="text-secondary">.dev</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="index.php?hal=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?hal=about">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?hal=contact">Contact Me</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Studies
          </a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="index.php?hal=level_list">Level (Pendidikan)</a></li>
            <li><a class="dropdown-item" href="index.php?hal=studies_list">Studies (Riwayat)</a></li>
          </ul>
        </li>

        <?php if (!isset($_SESSION['MEMBER'])): ?>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-secondary btn-sm ms-lg-2 text-white" href="index.php?hal=login">Login</a>
          </li>
        <?php else: ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"></i>
              <?= $_SESSION['MEMBER']['username'] ?> (<?= $_SESSION['MEMBER']['role'] ?>)
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <?php if ($_SESSION['MEMBER']['role'] == 'admin'): ?>
                <li><a class="dropdown-item" href="#">Kelola User</a></li>
              <?php endif; ?>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item text-danger" href="logout.php" onclick="return confirm('Yakin ingin logout?')">
                  <i class="bi bi-box-arrow-right"></i> Logout
                </a>
              </li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>

      <form class="d-flex" role="search" method="GET" action="index.php">
        <input type="hidden" name="hal" value="produk_list">
        <input class="form-control me-2 bg-secondary text-white border-0" type="search" name="keyword" placeholder="Cari Produk..." aria-label="Search" style="--bs-bg-opacity: .2;">
        <button class="btn btn-secondary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>