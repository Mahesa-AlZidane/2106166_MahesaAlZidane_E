<?php

    /*Membuat koneksi dengan my sql */
    $koneksi = mysqli_connect("localhost", "root", "", "2106166_MahesaAlZidane");

    /*periksa koneksi, jika tidak terkoneksi maka munculkan pesan gagal */
    if (!$koneksi) {
        echo "<script>alert('koneksi database gagal');</script>";
    }
?>