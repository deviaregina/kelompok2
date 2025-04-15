<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-header {
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            padding: 20px;
            border-radius: 0 0 20px 20px;
            text-align: center;
            color: white;
        }
        .profile-header img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid white;
        }
        .profile-header h5 {
            margin-top: 10px;
        }
        .menu-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 10px;
        }
        .bottom-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
            padding: 10px 0;
        }
        .bottom-nav a {
            text-align: center;
            flex: 1;
            font-size: 14px;
            color: #555;
        }
        .bottom-nav a.active {
            color: #ff6b81;
        }
    </style>
</head>
<body>

<!-- Header Profile -->
<div class="profile-header">
    <img src="https://via.placeholder.com/80" alt="Profile">
    <h5>Depa Mulyadi</h5>
    <p>75853455</p>
</div>

<!-- Menu Pesanan -->
<div class="container mt-3">
    <div class="menu-card">
        <h6>Pesanan</h6>
        <div class="d-flex justify-content-between">
            <div class="text-center">
                <i class="fas fa-wallet fa-2x text-danger"></i>
                <p>Selesaikan Pembayaran</p>
            </div>
            <div class="text-center">
                <i class="fas fa-box fa-2x text-danger"></i>
                <p>Diproses</p>
            </div>
            <div class="text-center">
                <i class="fas fa-truck fa-2x text-danger"></i>
                <p>Dikirim</p>
            </div>
            <div class="text-center">
                <i class="fas fa-check-circle fa-2x text-danger"></i>
                <p>Tiba di Tujuan</p>
            </div>
        </div>
    </div>



<!-- Bottom Navigation -->
<div class="d-flex bottom-nav">
    <a href="#"><i class="fas fa-store"></i><br>Mall</a>
    <a href="#"><i class="fas fa-newspaper"></i><br>Berita</a>
    <a href="#"><i class="fas fa-user-friends"></i><br>Member</a>
    <a href="#" class="active"><i class="fas fa-user"></i><br>Pusat Saya</a>
</div>

</body>
</html>
