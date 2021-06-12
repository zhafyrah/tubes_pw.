<?php
include '../ctrl/bootstrap.php';
include '../ctrl/config.php';

session_start();

$nama_kereta = $_GET["nama_kereta"];
$asal = $_GET["asal"];
$tujuan = $_GET["tujuan"];
$harga = $_GET['harga'];

?>

<div class="container">
    <h2 class="alert alert-primary text-center mt-3">PESAN KERETA</h2>

    <form action="bukti.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nama Kereta</label>
            <input type="text" placeholder="Nama Kereta" class="form-control" value="<?= $nama_kereta ?>" disabled>
            <input type="hidden" name="nama_kereta" value="<?= $nama_kereta ?>">
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Asal Kereta</label>
                    <input type="text" class="form-control" placeholder="Asal Kereta" name="asal" value="<?= $asal ?>" disabled>
                    <input type="hidden" name="asal" value="<?= $asal ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="password"> Tujuan Kereta</label>
                    <input type="text" class="form-control" placeholder="Tujuan Kereta" disabled>
                    <input type="hidden" name="tujuan" value="<?= $tujuan ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="berangkat">Jam Pemberangkatan</label>
                    <input type="text" class="form-control" placeholder="Pemberangkatan" name="berangkat" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="Telepon">Harga</label>
                    <input type="number" class="form-control" placeholder="Harga" name="harga" value="<?= $harga ?>" disabled>
                    <input type="hidden" name="harga" value="<?= $harga ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="jumlah_tiket">Jumlah Ticket</label>
                    <input type="number" class="form-control" placeholder="" name="jumlah_tiket" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary p-3" enctype="multipart/form-data" name="pesan" value="Pesan" />
                </div>
            </div>
        </div>

    </form>
    <br><br><br>
</div>