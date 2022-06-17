<?php

include "koneksi/koneksi.php";

if (isset($_POST['simpan'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    mysqli_query($koneksi, "UPDATE berita SET id ='$a',judul='$b',deskripsi='$c',tgl_publis='$d',penulis='$e' WHERE id='$a'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header('location:index.php?page=berita');
    } else {
        echo "Data gagal disimpan";
    }
}
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $queri = mysqli_query($koneksi, "SELECT * FROM berita WHERE id = '$id'");
    $data = mysqli_fetch_array($queri);

?>
    <form method="post">
        <table>
            <tr>
                <td>Masukan id</td>
                <td><input type="text" name="a" value="<?= $data[0] ?>"></td>
            </tr>
            <tr>
                <td>Masukan Judul</td>
                <td><input type="text" name="b" value="<?= $data[1] ?>"></td>
            </tr>
            <tr>
                <td>Deskription</td>
                <td><textarea name="c" cols="23" rows="3" placeholder="<?= $data[2] ?>"></textarea></td>
            </tr>
            <tr>
                <td>Tgl Publis</td>
                <td><input type="date" name="d" value="<?= $data[3] ?>"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="e" value="<?= $data[4] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" class="btn btn-primary" value="simpan"></td>
            </tr>
        </table>
    </form>
<?php
}
?>