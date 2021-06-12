<?php
include '../ctrl/bootstrap.php';
include '../ctrl/config.php';

session_start();

$id = $_GET["id"];
$username = $_GET["username"];
$password = $_GET["password"];
$telepon = $_GET["telepon"];
$jenis_kelamin = $_GET["jenis_kelamin"];
$alamat = $_GET['alamat'];
?>

<div class="container">
    <h2 class="alert alert-primary text-center mt-3">PENDAFTARAN</h2>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Masukan Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" value="<?= $username ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Masukan Password</label>
                    <input type="text" class="form-control" placeholder="Password" name="password" value="<?= $password ?>">
                </div>
            </div>
        </div>

        <!-- KARENA KOLOM MAKSIMAL 12 JADI "col-md-6" Agar membagi menjadi 2 kolom -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Telepon">Masukan No. Telepon</label>
                    <input type="number" class="form-control" placeholder="Telepon" name="telepon" value="<?= $telepon ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Pilih Jenis Kelamin</label><br>

                    <!-- Menggunakan "form-check-inline" agar radio buttonnya masih pada satu baris yang sama -->
                    <div class="">
                        <input type="radio" class="from-check-input" name="jenis_kelamin" value="L" <?php echo ($jenis_kelamin == 'L') ? "checked" : "" ?>>
                        <label for="">&nbspLaki-Laki</label>
                    </div>
                    <!-- Menggunakan "form-check-inline" agar radio buttonnya masih pada satu baris yang sama -->
                    <div class="">
                        <input type="radio" class="from-check-input" name="jenis_kelamin" value="P" <?php echo ($jenis_kelamin == 'P') ? "checked" : "" ?>>
                        <label for="">&nbspPerempuan</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">Masukan Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $alamat ?>">
        </div>


        <button type="submit" class="btn btn-primary" name="edit-customer">SIMPAN</button>

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