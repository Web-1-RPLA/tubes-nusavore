<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin - NusaVore (Test)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { background-color: #fff8f0; font-family: system-ui, sans-serif; }
        .bg-nusa { background-color: #ff6d00 !important; color: white; }
        .text-nusa { color: #ff6d00 !important; }
        .btn-nusa {
            background-color: #ff6d00;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.6rem 1.5rem;
        }
        .btn-nusa:hover { background-color: #e65c00; }
        .card { border-radius: 1rem; overflow: hidden; }
        .card-header { padding: 1.5rem; }
        .card-img-top { height: 180px; object-fit: cover; }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Header -->
    <div class="text-center bg-nusa rounded-3 p-5 mb-5">
        <h1 class="display-5 fw-bold">Selamat Datang, Admin NusaVore</h1>
        <p class="lead">Kelola menu, reservasi, dan ulasan di sini</p>
    </div>

    <!-- Statistik -->
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card shadow-sm text-center h-100">
                <div class="card-header bg-nusa">
                    <i class="fas fa-utensils fa-3x mb-3"></i>
                    <h5>Total Menu</h5>
                </div>
                <div class="card-body">
                    <h2 class="text-nusa fw-bold">24</h2>
                    <a href="#" class="btn btn-nusa btn-sm mt-2">Kelola</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm text-center h-100">
                <div class="card-header bg-nusa">
                    <i class="fas fa-calendar-check fa-3x mb-3"></i>
                    <h5>Total Reservasi</h5>
                </div>
                <div class="card-body">
                    <h2 class="text-nusa fw-bold">18</h2>
                    <a href="#" class="btn btn-nusa btn-sm mt-2">Lihat</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm text-center h-100">
                <div class="card-header bg-warning">
                    <i class="fas fa-clock fa-3x mb-3"></i>
                    <h5>Pending</h5>
                </div>
                <div class="card-body">
                    <h2 class="text-warning fw-bold">5</h2>
                    <a href="#" class="btn btn-warning btn-sm mt-2 text-white">Konfirmasi</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm text-center h-100">
                <div class="card-header bg-success">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h5>Pelanggan</h5>
                </div>
                <div class="card-body">
                    <h2 class="text-success fw-bold">142</h2>
                    <a href="#" class="btn btn-success btn-sm mt-2">Data</a>
                </div>
            </div>
        </div>
    </div>

    <h3 class="text-center text-nusa mb-4">Menu Terbaru</h3>
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="https://via.placeholder.com/400x180/ff6d00/ffffff?text=Ayam+Bakar" class="card-img-top" alt="Ayam Bakar">
                <div class="card-body text-center">
                    <h5>Ayam Bakar</h5>
                    <p class="text-nusa fw-bold">Rp 28.000</p>
                    <a href="#" class="btn btn-nusa btn-sm">Edit</a>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>