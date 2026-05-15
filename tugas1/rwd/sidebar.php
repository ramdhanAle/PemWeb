<div class="card shadow-sm border-0">
  <div class="card-header bg-secondary text-white py-3">
    <h5 class="card-title mb-0"><i class="bi bi-grid-fill me-2"></i> Dashboard</h5>
  </div>
  <div class="list-group list-group-flush">
    <div class="list-group-item bg-dark text-white-50 fw-bold small">NAVIGATION</div>
    <a href="index.php?hal=level_list" class="list-group-item list-group-item-action">
      <i class="bi bi-mortarboard me-3"></i> Level
    </a>
    <a href="index.php?hal=studies_list" class="list-group-item list-group-item-action">
      <i class="bi bi-book me-3"></i> Studies
    </a>
  </div>
</div>

<div class="card-footer bg-dark py-3">
  <?php if (isset($_SESSION['MEMBER'])): ?>
    <div class="d-flex align-items-center text-success small">
      <span class="spinner-grow spinner-grow-sm me-2" role="status"></span>
      Logged in as <strong><?= $_SESSION['MEMBER']['role'] ?></strong>
    </div>
  <?php else: ?>
    <div class="text-muted small">
      <i class="bi bi-info-circle me-1"></i> Silakan login untuk CRUD.
    </div>
  <?php endif; ?>
</div>
</div>