<?php
include '../ctrl/bootstrap.php';
include '../ctrl/config.php';

session_start();

if (!isset($_SESSION['login'])) {
    echo "<script>alert('Login dahulu');</script>";
    echo "<script>window.location.replace('../login/login.php');</script>";
}
?>

<nav class="navbar navbar-expand-lg bg-primary text-light" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-white font-weight-bold" href="#">
            <h3>GO <span>TRAIN</span></h3>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn bg-light px-4 my-sm-0 mr-3" aria-current="page" href="../login/logout.php"><b>LOGOUT</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/kereta3.jpg" alt="First slide" style="height: 550px;">

        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/kereta2.jpg" alt="Second slide" style="height: 550px;">
            <div class="carousel-caption d-none d-md-block" style="background-color: black ;opacity: 0.9;">
                <h3>SELAMAT DATANG</h3>
                <p>Di Website Resmi GO TRAIN,
                    sebuah web yang dirancang sebagai sumber informasi bagi anda untuk merencanakan sebuah perjalanan Kereta Api. Anda akan menemukan berbagai informasi mengenai tujuan yang sangat menarik yang sudah kami kemas dalam paket-paket yang eksklusif.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- ISI -->
<center>


    <div class="col-md-10 p-5 pt-4">
        <center>
            <h3><i class="fas fa-subway mr-2"></i> DATA KERETA</h3>
        </center>

        <hr>

        <!-- TABEL -->
        <table class="table table-striped table-bordered">
            <thead class="bg-success text-white">
                <tr>
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
                        <td><?= $objKer['nama_kereta'] ?></td>
                        <td><?= $objKer['asal'] ?></td>
                        <td><?= $objKer['tujuan'] ?></td>
                        <td><?= $objKer['harga'] ?></td>
                        <td>
                            <a href="pesan.php?id_kereta=<?= $objKer['id_kereta'] ?>&nama_kereta=<?= $objKer['nama_kereta'] ?>&asal=<?= $objKer['asal'] ?>&tujuan=<?= $objKer['tujuan'] ?>&harga=<?= $objKer['harga'] ?>" class="btn btn-primary mb-3">PESAN</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</center>

<?php
//menaruh isi file header dan bootstrap
include '../ctrl/footer.php';
?>