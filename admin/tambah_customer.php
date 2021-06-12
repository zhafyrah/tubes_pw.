<?php
include '../ctrl/bootstrap.php';
include '../ctrl/config.php';

session_start();
?>

<div class="container">
    <h2 class="alert alert-primary text-center mt-3">PENDAFTARAN</h2>
    <form action="" method="POST">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Masukan Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Masukan Password</label>
                    <input type="text" class="form-control" placeholder="Password" name="password">
                </div>
            </div>
        </div>

        <!-- KARENA KOLOM MAKSIMAL 12 JADI "col-md-6" Agar membagi menjadi 2 kolom -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Telepon">Masukan No. Telepon</label>
                    <input type="number" class="form-control" placeholder="Telepon" name="telepon">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Pilih Jenis Kelamin</label><br>

                    <!-- Menggunakan "form-check-inline" agar radio buttonnya masih pada satu baris yang sama -->
                    <div class="">
                        <input type="radio" class="from-check-input" name="jenis_kelamin" value="L">
                        <label for="">&nbspLaki-Laki</label>
                    </div>
                    <!-- Menggunakan "form-check-inline" agar radio buttonnya masih pada satu baris yang sama -->
                    <div class="">
                        <input type="radio" class="from-check-input" name="jenis_kelamin" value="P">
                        <label for="">&nbspPerempuan</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">Masukan Alamat</label>
            <textarea name="alamat" id="" class="form-control col-12" rows="5"></textarea>
        </div>


        <button type="submit" class="btn btn-primary" name="simpan-customer">SIMPAN</button>

    </form>
    <br><br><br>

    <?php
    if (isset($_POST["simpan-customer"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $telepon = $_POST["telepon"];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO `tb_user` (`id`, `username`, `password`, `telepon`, `jenis_kelamin`, `alamat`, `tipe`) VALUES (NULL, '$username', '$password', '$telepon', '$jenis_kelamin', '$alamat', 'customer');";

        mysqli_query($connect, $sql);

        if (!isset($_SESSION['login'])) {
            header('Location: ../login/login.php');
        } else if (isset($_SESSION['login'])) {
            header("Location: customer.php");
        }
    }
    ?>
</div>