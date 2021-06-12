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
    <div class="col-md-2 bg-dark pr-3 pt-4 pb-5">
        <ul class="nav flex-column ml-3 pb-auto">
            <li class="nav-item">
                <a class="nav-link text-white p-3" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i>
                    Dashboard</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white p-3" href="customer.php"><i class="fas fa-users mr-2"></i>
                    Daftar
                    Customer</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link active bg-light text-dark p-3" href="kereta.php"><i class="fas fa-subway mr-2"></i>
                    Daftar Kereta</a>
                <hr class="bg-secondary">
            </li>
        </ul>
    </div>

    <!-- ISI -->
    <div class="col-md-10 p-5 pt-4">
        <h3><i class="fas fa-subway mr-2"></i> DATA KERETA</h3>
        <hr>

        <a href="tambah_kereta.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i> TAMBAH DATA KERETA</a>

        <!-- TABEL -->
        <table class="table table-striped table-bordered">
            <thead class="bg-success text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA KERETA</th>
                    <th scope="col">ASAL</th>
                    <th scope="col">TUJUAN</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $hasil = $connect->query("SELECT * FROM tb_kereta");

                $dataKer = array();
                while ($fetchData = $hasil->fetch_assoc()) {
                    $dataKer[] = $fetchData;
                }

                $dataJSONker = json_encode($dataKer);
                $objectKer = json_decode($dataJSONker, true);
                ?>

                <?php foreach ($objectKer as $objKer) : ?>
                    <tr>
                        <th scope="row"><?= $objKer['id_kereta'] ?></th>
                        <td><?= $objKer['nama_kereta'] ?></td>
                        <td><?= $objKer['asal'] ?></td>
                        <td><?= $objKer['tujuan'] ?></td>
                        <td><?= $objKer['harga'] ?></td>
                        <td>
                            <form method="POST" action="hapus_kereta.php">
                                <a href="edit_kereta.php?id_kereta=<?= $objKer['id_kereta'] ?>&nama_kereta=<?= $objKer['nama_kereta'] ?>&asal=<?= $objKer['asal'] ?>&tujuan=<?= $objKer['tujuan'] ?>&harga=<?= $objKer['harga'] ?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a>
                                <input type="hidden" name="id" value="<?= $objKer['id'] ?>" />
                                <button><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>