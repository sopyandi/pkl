<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Masukan nik</td>
            <td><input type="text" name="a"></td>
        </tr>
        <tr>
            <td>Masukan nama</td>
            <td><input type="text" name="b"></td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td>
                <input type="radio" name="c" value="l">Laki-Laki
                <input type="radio" name="c" value="p">Perempuan
            </td>
        </tr>
        <tr>
            <td>kelas</td>
            <td>
                <select name="d" id="">
                    <option value="x">X</option>
                    <option value="xi">XI</option>
                    <option value="xii">XII</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>foto</td>
            <td><input type="file" name="e"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" class="btn btn-success" value="simpan"></td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST['simpan'])) {
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
                $simpan = mysqli_query($koneksi, "INSERT INTO siswa VALUE('$a','$b','$c','$d','$e')");
            }
        }
    } else {
        //jika form gambar tidak di isi ini yang akan terjadi  
        $simpan = mysqli_query($koneksi, "INSERT INTO siswa VALUE('$a','$b','$c','$d','')");
    }
    if (mysqli_affected_rows($koneksi) > 0) {
        header('location:index.php?page=siswa');
    }
}
?>