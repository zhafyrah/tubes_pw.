<?php
include '../ctrl/bootstrap.php';
include '../ctrl/config.php';

if (isset($_POST['pesan'])) {

    $nama_kereta = $_POST["nama_kereta"];
    $asal = $_POST["asal"];
    $tujuan = $_POST["tujuan"];
    $berangkat = $_POST["berangkat"];
    $harga = $_POST['harga'];
    $jumlah_tiket = $_POST['jumlah_tiket'];
    $total = $_POST['total'];
?>


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>&nbsp;</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="template/dashboard/css/bootstrap.min.css" />
        <link rel="stylesheet" href="template/dashboard/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="template/dashboard/css/fullcalendar.css" />
        <link rel="stylesheet" href="template/dashboard/css/matrix-style.css" />
        <link rel="stylesheet" href="template/dashboard/css/matrix-media.css" />
        <link href="template/dashboard/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="template/dashboard/css/jquery.gritter.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

        <style>
            @page {
                size: auto;
            }

            body {
                background: rgb(204, 204, 204);
            }

            page {
                background: white;
                display: block;
                margin: 0 auto;
                margin-bottom: 0.5cm;
                box-shadow: 0 0 0.1cm rgba(0, 0, 0, 0.5);
            }

            page[size="A4"] {
                width: 29.7cm;
                height: 21cm;
            }

            page[size="A4"][layout="potrait"] {
                width: 29.7cm;
                height: 21cm;
            }

            page[size="A3"] {
                width: 29.7cm;
                height: 42cm;
            }

            page[size="A3"][layout="landscape"] {
                width: 42cm;
                height: 29.7cm;
            }

            page[size="A5"] {
                width: 14.8cm;
                height: 21cm;
            }

            page[size="A5"][layout="landscape"] {
                width: 21cm;
                height: 19.8cm;
            }

            page[size="dipakai"][layout="landscape"] {
                width: 20cm;
                height: 20cm;
            }

            @media print {

                body,
                page {
                    margin: auto;
                    box-shadow: 0;
                }
            }
        </style>


    </head>

    <body>

        <page size="dipakai" layout="landscape">
            <br>
            <div class="container">
                <center>
                    <h3>
                        GO TRAIN
                    </h3>
                </center>
                <hr>
                <table style="width: 100%" class="">
                    <tr>
                        <td>
                            Nama Kereta
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $nama_kereta ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Asal
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $asal ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tujuan
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $tujuan ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Jam Pemberangkatan
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $berangkat ?>
                        </td>
                    </tr>

                </table>

                <hr>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="head0 right">Jumlah Tiket</th>
                            <th class="head1 right">Harga</th>
                            <th class="head0 right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <center><?= $jumlah_tiket ?></center>
                            </td>
                            <td>Rp. <?= $harga ?></td>
                            <td class="right">
                                <strong>
                                    Rp.
                                    <?php $hasil = $jumlah_tiket * $harga;
                                    echo $hasil;
                                    ?>,-
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <center>
                    <h5>
                        Terima Kasih, Silahkan screenshot atau berikan ke pihak yang bertugas
                    </h5>
                </center>
                <hr>

                <center>
                    <a class="btn btn-success" href="index.php"></span> KEMBALI KE MENU</a>
                </center>
            </div>
        </page>
    </body>

<?php
}

?>

<script type="text/javascript">
    document.getElementById('ct').onclick = function() {
        $("#remove").remove();
        window.print();
    }
    $(document).ready(function() {
        $("remove").remove();

    });
</script>

<script src="template/dashboard/js/excanvas.min.js"></script>
<script src="template/dashboard/js/jquery.min.js"></script>
<script src="template/dashboard/js/jquery.ui.custom.js"></script>
<script src="template/dashboard/js/bootstrap.min.js"></script>
<script src="template/dashboard/js/jquery.flot.min.js"></script>
<script src="template/dashboard/js/jquery.flot.resize.min.js"></script>
<script src="template/dashboard/js/jquery.peity.min.js"></script>
<script src="template/dashboard/js/fullcalendar.min.js"></script>
<script src="template/dashboard/js/matrix.js"></script>
<script src="template/dashboard/js/matrix.dashboard.js"></script>
<script src="template/dashboard/js/jquery.gritter.min.js"></script>
<script src="template/dashboard/js/matrix.interface.js"></script>
<script src="template/dashboard/js/matrix.chat.js"></script>
<script src="template/dashboard/js/jquery.validate.js"></script>
<script src="template/dashboard/js/matrix.form_validation.js"></script>
<script src="template/dashboard/js/jquery.wizard.js"></script>
<script src="template/dashboard/js/jquery.uniform.js"></script>
<script src="template/dashboard/js/select2.min.js"></script>
<script src="template/dashboard/js/matrix.popover.js"></script>
<script src="template/dashboard/js/jquery.dataTables.min.js"></script>
<script src="template/dashboard/js/matrix.tables.js"></script>

</html>
<?php  ?>