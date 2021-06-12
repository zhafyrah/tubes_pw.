<?php
include '../ctrl/bootstrap.php';
include '../ctrl/config.php';

session_start();
if (isset($_SESSION['login'])) {
    echo "<script>alert('Logout Dahulu');</script>";
    echo "<script>window.location.replace('index.php');</script>";
    exit;
}

?>
<nav class="navbar navbar-expand-lg bg-primary text-light" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-white font-weight-bold" href="../index.php">
            <h3>GO <span>TRAIN</span></h3>
        </a>
        <button class="navbar-toggler navbar-toogler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container" style="width: 30%; margin-top: 9%; box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3); padding: 40px;">
    <h4 class="text-center">FORM LOGIN</h4>

    <form action="" method="POST">
        <div class="form-group">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
        </div>

        <div class="formn-group">
            <label for=""></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-unlock"></i>
                    </div>
                </div>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>

        </div>
        <br>

        <input type="submit" class="btn btn-primary" name="btn-login" style="width: 100%;"></input>

    </form>

    <center>
        <a href="../admin/tambah_customer.php"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrasi >>></a>
    </center>
</div>

<?php
if (isset($_POST["btn-login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = $connect->query("SELECT * FROM tb_user WHERE username = '$username'");

    while ($hasil = mysqli_fetch_array($result)) {
        if ($hasil['username'] == $username and $hasil['password'] == $password) {

            $_SESSION['login'] = true;
            $_SESSION['username'] = $hasil['username'];
            if ($hasil['tipe'] == "customer") {
                echo "<script>alert('Berhasil Login Customer');</script>";
                echo "<script>window.location.replace('../customer/index.php');</script>";
            } else if ($hasil['tipe'] == "admin") {
                echo "<script>alert('Berhasil Login Admin');</script>";
                echo "<script>window.location.replace('../admin/index.php');</script>";
            }
        } else {
            $_SESSION['eror'] = 'salah';
            header('location: index.php');
        }
    }
    // if (mysqli_num_rows($result) === 1) {

    //     $data = mysqli_fetch_assoc($result);
    //     if (password_verify($password, $data['password'])) {
    // $_SESSION['login'] = true;
    // $_SESSION['username'] = $data['username'];
    // echo "<script>alert('Berhasil Login');</script>";
    // echo "<script>window.location.replace('index.php');</script>";
    //     } else {
    //         echo "<script>alert('Gagal  Login');</script>";
    //         echo "<script>window.location.replace('index.php');</script>";
    //     }
    // } else {
    //     echo "<script>alert('Gagal Login')</script>";
    //     echo "<script>window.location.replace('login.php');</script>";
    // }
}

?>
</body>

</html>