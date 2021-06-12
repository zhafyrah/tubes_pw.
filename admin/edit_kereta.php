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
    <h2 class="alert alert-primary text-center mt-3">DATA KERETA</h2>
    <form action="" method="POST">

        <div class="form-group">
            <label for="">Masukan Nama Kereta</label>
            <input type="text" placeholder="Nama Kereta" class="form-control" name="nama_kereta" value="<?= $nama_kereta ?>">
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Masukan Asal Kereta</label>
                    <input type="text" class="form-control" placeholder="Asal Kereta" name="asal" value="<?= $asal ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Masukan Tujuan Kereta</label>
                    <input type="text" class="form-control" placeholder="Tujuan Kereta" name="tujuan" value="<?= $tujuan ?>">
                </div>
            </div>
        </div>

        <!-- KARENA KOLOM MAKSIMAL 12 JADI "col-md-6" Agar membagi menjadi 2 kolom -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Telepon">Masukan Harga</label>
                    <input type="number" class="form-control" placeholder="Harga" name="harga" value="<?= $harga ?>">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="simpan-kereta">SIMPAN</button>

    </form>
    <br><br><br>

    <?php
    if (isset($_POST["edit-customer"])) {
        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $telepon = $_POST["telepon"];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];

        $sql = "UPDATE tb_user SET username= '$username', password= '$password', telepon = '$telepon', jenis_kelamin= '$jenis_kelamin', alamat= '$alamat', tipe= 'customer' WHERE id = '$id'";

        mysqli_query($connect, $sql);

        echo $id;

        if (!isset($_SESSION['login'])) {
            header('Location: ../login/login.php');
        } else if (isset($_SESSION['login'])) {
            header("Location: customer.php");
        }
    }
    ?>
</div>