<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $nama_db = "go_train";

    $koneksi = mysql_connect($server, $username, $password, $db_login);


    if(!$koneksi)
    {
        echo "Database Tidak Konek";
    }

    else
    {
        echo "Koneksi Berjalan";
    }
?>