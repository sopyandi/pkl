
<?php

include "koneksi/koneksi.php";

if (isset($_POST['simpan'])) {
    $nama_foto = $_POST['nama'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    //ambil nama gambar
    $e = $_FILES['e']['name'];
    //pindahkan foto ke dalam folder
    $direktori = 'img/' . $e;
    //ambil ukuran gambar
    $size = $_FILES['e']['size'];
    //proses
    include "koneksi/koneksi.php";
    //jika form gambar di isi ini yang terjadi
    //system akan memfilter gambar 
    if (is_uploaded_file($_FILES['e']['tmp_name'])) {
        if ($size > 3000000) {
            echo "Gambar terlalu besar";
        } else {
            if (move_uploaded_file($_FILES['e']['tmp_name'], $direktori)) {
                $simpan = mysqli_query($koneksi, "UPDATE siswa SET nik ='$a',nama='$b',jk='$c',kelas='$d',poto='$e' WHERE nik='$a'");
            }
        }
    } else {
        //jika form gambar tidak di isi ini yang akan terjadi  
        $simpan = mysqli_query($koneksi, "UPDATE siswa SET nik ='$a',nama='$b',jk='$c',kelas='$d',poto='$nama_foto' WHERE nik='$a'");
    }
    if (mysqli_affected_rows($koneksi) > 0) {
        header('location:index.php?page=siswa');
    }
}


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $queri = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nik = '$id'");
    $data = mysqli_fetch_array($queri);
    $nama_foto = $data[4];

?>
    <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>update nik</td>
                <td><input type="text" name="a" value="<?= $data[0] ?>"></td>
            </tr>
            <tr>
                <td>update nama</td>
                <td><input type="text" name="b" value="<?= $data[1] ?>"></td>
            </tr>
            <tr>
                <td> kelamin</td>
                <td>
                <?php
                $jk = $data[2];
                if($jk == 'l'){
                $l = 'checked';
                $p = '';
                }else if($jk == 'p'){
                $l = '';
                $p = 'checked';
                }
                ?>
                <input type="radio" name="c" value="l" <?=$l?>>laki-laki
                <input type="radio" name="c" value="p" <?=$p?>>perempuan
            </td>
            </tr>
            <tr>
                <td>kelas</td>
                <td>
                <?php
                $kelas = $data[3];
                ?>
                <select name="d" id="">
                    <option value="x"<?php if($kelas == 'x'){echo'selected';}?>>x</option>
                    <option value="xi"<?php if($kelas == 'xi'){echo'selected';}?>>xi</option>
                    <option value="xii"<?php if($kelas == 'xii'){echo'selected';}?>>xii</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>update poto </td>
                <td>
                 <img src="img/<?= $data[4] ?>" alt="" style="width:10%;height:20%;margin-left:-10;">
                <input type="radio" name="nama" value="<?= $data[4]?>" checked style="width:10%;height:20%;margin-top:-10;" >

            </td>
            </tr>
            <tr>
                <td></td>
            <td>
                <input type="file" name="e">
            </td>
            </td>
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

<style>
    img{
        border:2px solid black;
        border-radius:10px;
    }

</style>