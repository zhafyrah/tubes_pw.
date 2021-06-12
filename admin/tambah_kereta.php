<?php
include '../ctrl/bootstrap.php';
include '../ctrl/config.php';

session_start();
?>

<div class="container">
    <h2 class="alert alert-primary text-center mt-3">DATA KERETA</h2>
    <form action="" method="POST">

        <div class="form-group">
            <label for="">Masukan Nama Kereta</label>
            <input type="text" placeholder="Nama Kereta" class="form-control" name="nama_kereta">
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Masukan Asal Kereta</label>
                    <input type="text" class="form-control" placeholder="Asal Kereta" name="asal">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Masukan Tujuan Kereta</label>
                    <input type="text" class="form-control" placeholder="Tujuan Kereta" name="tujuan">
                </div>
            </div>
        </div>

        <!-- KARENA KOLOM MAKSIMAL 12 JADI "col-md-6" Agar membagi menjadi 2 kolom -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Telepon">Masukan Harga</label>
                    <input type="number" class="form-control" placeholder="Harga" name="harga">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="simpan-kereta">SIMPAN</button>

    </form>
    <br><br><br>

    <?php
    if (isset($_POST["simpan-kereta"])) {
        $nama_kereta = $_POST["nama_kereta"];
        $asal = $_POST["asal"];
        $tujuan = $_POST["tujuan"];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO `tb_kereta` (`id_kereta`, `nama_kereta`, `asal`, `tujuan`, `harga`) VALUES (NULL, '$nama_kereta', '$asal', '$tujuan', '$harga');";

        mysqli_query($connect, $sql);

        if (!isset($_SESSION['login'])) {
            header('Location: ../login/login.php');
        } else if (isset($_SESSION['login'])) {
            header("Location: kereta.php");
        }
    }
    ?>
</div>