<?php

if (isset($_GET['id'])) {

    include "koneksi/koneksi.php";

    $id = $_GET['id'];
    $queri = mysqli_query($koneksi, "DELETE FROM berita WHERE id = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header('location:index.php?page=berita');
    } else {
        echo "Data gagal disimpan";
    }
} else if (isset($_GET['ids'])) {

    include "koneksi/koneksi.php";

    $id = $_GET['ids'];
    $queri = mysqli_query($koneksi, "DELETE FROM siswa WHERE nik = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header('location:index.php?page=siswa');
    } else {
        echo "Data gagal disimpan";
    }
}
