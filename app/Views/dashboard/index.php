<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f9;
    }
    .navbar {
      background-color: #fff;
      border-bottom: 1px solid #ddd;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .menu-icon {
      font-size: 28px;
      color: #e91e63;
    }
    .menu-label {
      font-size: 14px;
      color: #333;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light px-4 py-2 shadow-sm">
  <div class="container-fluid">
    <span class="navbar-brand fw-bold">Dashboard</span>
    <div class="d-flex align-items-center ms-auto">
      <span class="me-3">👤 <?= esc($user_name) ?></span>
      <a href="/logout" class="btn btn-outline-danger btn-sm">Logout</a>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container py-4">
  <div class="row">
    <!-- Profile Card -->
    <div class="col-md-6 mb-4">
      <div class="card p-3">
        <div class="d-flex align-items-center">
          <img src="https://via.placeholder.com/70" class="rounded-circle me-3" alt="profile">
          <div>
            <h5 class="mb-0"><?= esc($user_name) ?></h5>
            <small class="text-muted">ID: 75853455</small><br>
            <a href="/dashboard/edit-profile" class="btn btn-link p-0">Edit Profil</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Menu Pesanan -->
    <div class="col-md-6 mb-4">
      <div class="card p-3">
        <h6 class="fw-bold mb-3">Status Pesanan</h6>
        <div class="d-flex justify-content-around text-center">
          <div>
            <i class="bi bi-wallet2 menu-icon"></i>
            <div class="menu-label">Pembayaran</div>
          </div>
          <div>
            <i class="bi bi-bookmark menu-icon"></i>
            <div class="menu-label">Diproses</div>
          </div>
          <div>
            <i class="bi bi-truck menu-icon"></i>
            <div class="menu-label">Dikirim</div>
          </div>
          <div>
            <i class="bi bi-box menu-icon"></i>
            <div class="menu-label">Tiba</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Grid Menu Tambahan -->
  <div class="row">
    <div class="col-12 mb-4">
      <div class="card p-4">
        <h6 class="fw-bold mb-3">Menu Utama</h6>
       <!-- Horizontal Menu -->
<div class="card p-3 mb-4">
  <div class="d-flex justify-content-between text-center flex-wrap">
    <a href="/training" class="flex-fill text-decoration-none text-dark py-2">
      <i class="bi bi-journal-text menu-icon d-block"></i>
      <span class="menu-label">Training</span>
    </a>
    <a href="/mall" class="flex-fill text-decoration-none text-dark py-2">
      <i class="bi bi-bag menu-icon d-block"></i>
      <span class="menu-label">Mall</span>
    </a>
    <a href="/berita" class="flex-fill text-decoration-none text-dark py-2">
      <i class="bi bi-newspaper menu-icon d-block"></i>
      <span class="menu-label">Berita</span>
    </a>
    <a href="/member" class="flex-fill text-decoration-none text-dark py-2">
      <i class="bi bi-person menu-icon d-block"></i>
      <span class="menu-label">Member</span>
    </a>
    <a href="/pusat-saya" class="flex-fill text-decoration-none text-danger fw-bold py-2">
      <i class="bi bi-person-circle menu-icon d-block"></i>
      <span class="menu-label">Pusat Saya</span>
    </a>
  </div>
</div>

      </div>
    </div>
  </div>

</div>

</body>
</html>
