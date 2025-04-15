<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?? 'Halaman' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { background-color: #f4f6f9; }
    .navbar { background-color: #fff; border-bottom: 1px solid #ddd; }
    .menu-icon { font-size: 28px; color: #e91e63; }
    .menu-label { font-size: 14px; color: #333; }
    .footer-nav {
      background: #fff;
      border-top: 1px solid #ddd;
      padding: 10px 0;
    }
    .footer-nav a {
      text-decoration: none;
      color: #555;
      margin: 0 15px;
      font-size: 14px;
    }
    .footer-nav a.active {
      color: #e91e63;
      font-weight: bold;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light px-4 py-2 shadow-sm">
  <div class="container-fluid">
    <span class="navbar-brand fw-bold">My App</span>
    <div class="ms-auto">
      <span class="me-3">👤 <?= session('user_name') ?></span>
      <a href="/logout" class="btn btn-outline-danger btn-sm">Logout</a>
    </div>
  </div>
</nav>

<!-- Konten -->
<div class="container py-4">
  <?= $this->renderSection('content') ?>
</div>

<!-- Footer Menu -->
<div class="footer-nav d-flex justify-content-center mt-5">
  <a href="/training" class="<?= uri_string() == 'training' ? 'active' : '' ?>">Training</a>
  <a href="/mall" class="<?= uri_string() == 'mall' ? 'active' : '' ?>">Mall</a>
  <a href="/berita" class="<?= uri_string() == 'berita' ? 'active' : '' ?>">Berita</a>
  <a href="/member" class="<?= uri_string() == 'member' ? 'active' : '' ?>">Member</a>
  <a href="/pusat-saya" class="<?= uri_string() == 'pusat-saya' ? 'active' : '' ?>">Pusat Saya</a>
</div>

</body>
</html>
