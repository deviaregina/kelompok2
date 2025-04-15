<!DOCTYPE html>
<html lang="id">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * { font-family: Arial, sans-serif; box-sizing: border-box; }
    body { background: #fff; margin: 0; padding: 0; }
    .container { max-width: 400px; margin: 30px auto; padding: 20px; }
    h2 { text-align: center; margin-bottom: 20px; color: #e91e63; }
    .tab { display: flex; justify-content: center; margin-bottom: 20px; }
    .tab div { margin: 0 10px; padding-bottom: 5px; cursor: pointer; font-weight: bold; }
    .tab .active { color: #e91e63; border-bottom: 2px solid #e91e63; }
    input { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 8px; }
    .btn { width: 100%; background: #e91e63; color: white; padding: 12px; border: none; border-radius: 25px; font-weight: bold; cursor: pointer; }
    .forgot { text-align: right; font-size: 13px; color: #3f51b5; text-decoration: none; display: block; margin-bottom: 25px; }
    .social-login { text-align: center; }
    .social-login img { width: 35px; margin: 0 8px; cursor: pointer; }
    .error { color: red; text-align: center; margin-bottom: 15px; }
  </style>
</head>
<body>

  <div class="container">
    <h2>MASUK</h2>

    <div class="tab">
      <div class="active">Masuk Akun</div>
      <div style="color: gray;">Login melalui Telepon</div>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="error"><?= session()->getFlashdata('error') ?></div>
    <?php endif ?>

    <form method="post" action="/login">
      <input type="email" name="email" placeholder="ID/Email" required>
      <input type="password" name="password" placeholder="Kata Sandi" required>
      <button class="btn" type="submit">MASUK</button>
    </form>

    <a class="forgot" href="#">🔑 Tidak ingat kata sandi?</a>

    <div class="social-login">
      <p>Metode login lainnya</p>
      <img src="https://img.icons8.com/color/48/facebook.png" alt="Facebook">
      <img src="https://img.icons8.com/color/48/vk-circled.png" alt="VK">
      <img src="https://img.icons8.com/ios-filled/50/mac-os.png" alt="Apple">
    </div>
  </div>

=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <form action="<?= base_url('/auth/login') ?>" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Masuk</button>
        </form>
    </div>
>>>>>>> 6eb8e969e6f907eda0a887bc62d007c6e0acbf87
</body>
</html>
