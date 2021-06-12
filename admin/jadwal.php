<?php
include '../ctrl/bootstrap.php';
include '../ctrl/config.php';

session_start();

if (!isset($_SESSION['login'])) {
    echo "<script>alert('Login dahulu');</script>";
    echo "<script>window.location.replace('login.php');</script>";
}
?>
<link rel="stylesheet" href="admin.css">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-primary text-light">
    <div class="navbar-brand">
        <h4>SELAMAT DATANG | <b><?php echo $_SESSION['username']; ?></b></h4>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn bg-light px-4 my-sm-0 mr-3" aria-current="page" href="login/login.php"><b>LOGOUT</b></a>
            </li>
        </ul>
    </div>

</nav>
<!-- NAVBAR -->

<div class="row no-gutters">

    <!-- SIDE NAV -->
    <div class="col-md-2 bg-dark pr-3 pt-4">
        <ul class="nav flex-column ml-3">
            <li class="nav-item">
                <a class="nav-link text-white p-3" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i>
                    Dashboard</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white p-3" href="customer.php"><i class="fas fa-users mr-2"></i></i>
                    Daftar
                    Customer</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link active bg-light text-dark p-3" href="jadwal.php"><i class="fas fa-paper-plane mr-2"></i>
                    Daftar Jadwal</a>
                <hr class="bg-secondary">
            </li>
        </ul>
    </div>

    <!-- ISI -->
    <div class="col-md-10 p-5 pt-4">
        <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3>
        <hr>
        <!-- CARD -->
        <div class="row text-white">
            <div class="card bg-info ml-5" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-user-graduate mr-2"></i>
                    </div>
                    <h5 class="card-title">JUMLAH MAHASISWA</h5>
                    <div class="display-4">1.200</div>
                    <a href="#">
                        <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i>
                        </p>
                    </a>
                </div>
            </div>

            <div class="card bg-danger ml-5" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-chalkboard-teacher mr-2"></i>
                    </div>
                    <h5 class="card-title">JUMLAH DOSEN</h5>
                    <div class="display-4">69</div>
                    <a href="#">
                        <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>