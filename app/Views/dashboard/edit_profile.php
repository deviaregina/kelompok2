<!DOCTYPE html>
<html>
<head>
  <title>Edit Profil</title>
  <style>
    body { font-family: sans-serif; max-width: 500px; margin: auto; padding: 20px; }
    input { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 8px; }
    .btn { padding: 10px 20px; background-color: #e91e63; color: #fff; border: none; border-radius: 8px; cursor: pointer; }
    .back { display: inline-block; margin-bottom: 20px; text-decoration: none; color: #3f51b5; }
    .success { color: green; }
  </style>
</head>
<body>

  <a class="back" href="/dashboard">← Kembali ke Dashboard</a>

  <h2>Edit Profil</h2>

  <?php if (session()->getFlashdata('success')): ?>
    <p class="success"><?= session()->getFlashdata('success') ?></p>
  <?php endif; ?>

  <form method="post" action="/dashboard/update-profile">
    <label>Nama:</label>
    <input type="text" name="name" value="<?= esc(session('user_name')) ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="user@example.com" readonly>

    <button class="btn" type="submit">Simpan</button>
  </form>
</body>
</html>
