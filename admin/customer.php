<?php
include '../ctrl/bootstrap.php';
include '../ctrl/config.php';

session_start();

if (!isset($_SESSION['login'])) {
    echo "<script>alert('Login dahulu');</script>";
    echo "<script>window.location.replace('../login/login.php');</script>";
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
                <a class="btn bg-light px-4 my-sm-0 mr-3" aria-current="page" href="../login/logout.php"><b>LOGOUT</b></a>
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
                <a class="nav-link active bg-light text-dark p-3" href="customer.php"><i class="fas fa-users mr-2"></i>
                    Daftar
                    Customer</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white p-3" href="kereta.php"><i class="fas fa-subway mr-2"></i>
                    Daftar Kereta</a>
                <hr class="bg-secondary">
            </li>
        </ul>
    </div>

    <!-- ISI -->
    <div class="col-md-10 p-5 pt-4">
        <h3><i class="fas fa-users mr-2"></i> DATA CUSTOMER</h3>
        <hr>

        <a href="tambah_customer.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i> TAMBAH DATA CUSTOMER</a>

        <!-- TABEL -->
        <table class="table table-striped table-bordered">
            <thead class="bg-success text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">TELEPON</th>
                    <th scope="col">JK</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $hasil = $connect->query("SELECT * FROM tb_user");

                $dataCus = array();
                while ($fetchData = $hasil->fetch_assoc()) {
                    $dataCus[] = $fetchData;
                }

                $dataJSONcus = json_encode($dataCus);
                $objectCus = json_decode($dataJSONcus, true);
                ?>

                <?php foreach ($objectCus as $objCus) : ?>
                    <tr>
                        <th scope="row"><?= $objCus['id'] ?></th>
                        <td><?= $objCus['username'] ?></td>
                        <td><?= $objCus['password'] ?></td>
                        <td><?= $objCus['telepon'] ?></td>
                        <td><?= $objCus['jenis_kelamin'] ?></td>
                        <td><?= $objCus['alamat'] ?></td>
                        <td>
                            <form method="POST" action="hapus_customer.php">
                                <a href="edit_customer.php?id=<?= $objCus['id'] ?>&username=<?= $objCus['username'] ?>&password=<?= $objCus['password'] ?>&telepon=<?= $objCus['telepon'] ?>&jenis_kelamin=<?= $objCus['jenis_kelamin'] ?>&alamat=<?= $objCus['alamat'] ?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a>
                                <input type="hidden" name="id" value="<?= $objCus['id'] ?>" />
                                <button><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>