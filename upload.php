<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Masukan id berita </td>
            <td><input type="text" name="a"></td>
        </tr>
        <tr>
            <td>Masukan judul berita </td>
            <td><input type="text" name="b"></td>
        </tr>
        <tr>
          <td>Tanggal Publish</td>
          <td><input type="text" name="c"></td>
        </tr>
        <tr>
          <td>Deskrpisi Berita</td>
          <td><textarea name="d" id="" cols="30" rows="3" name="d"></textarea></td>
        </tr>
        <tr>
            <td>Kategori Berita</td>
            <td>
                <select name="e" id="">
                <?php
                include "koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM kategori");
                while($data=mysqli_fetch_array($query)){
                ?>
                    <option value="<?= $data[0]?>"><?=$data[1]?></option>
                <?php 
                }      
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tambahkan Foto</td>
            <td>
                <input type="file" name="f" id="foto">
              </td>
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
    $e = $_POST['e'];
    //ambil nama gambar
    $f = $_FILES['f']['name'];
    //pindahkan foto ke dalam folder
    $direktori = 'foto-berita/' . $f;
    //ambil ukuran gambar
    $size = $_FILES['f']['size'];
    //proses
    include "koneksi/koneksi.php";
     // penghapusan data berita utama
     if($e == '1'){
        $kategori = '1';
        $hapus_berita_utama = mysqli_query($koneksi,"DELETE FROM berita WHERE id_kategori = '$kategori'");
    }
    //jika form gambar di isi ini yang terjadi
    //system akan memfilter gambar 
    if (is_uploaded_file($_FILES['f']['tmp_name'])) {
        if ($size > 3000000) {
            echo "Gambar terlalu besar";
        } else {
            if (move_uploaded_file($_FILES['f']['tmp_name'], $direktori)) {
                $simpan = mysqli_query($koneksi, "INSERT INTO berita VALUE('$a','$b','$c','$d','$e','$f')");
            }
        }
    } else {
        //jika form gambar tidak di isi ini yang akan terjadi  
        $simpan = mysqli_query($koneksi, "INSERT INTO berita VALUE('$a','$b','$c','$d','$e','')");
    }
    if (mysqli_affected_rows($koneksi) > 0) {
        header('location:index.php?page=berita');
    }
}
?>

<style>
  input,textarea{
    width:100% ;
    border-radius:7px;
  }
  input{
    height:50px;
    border:1px solid grey;
  }

  #foto{
    border:none;
  }
  select{
    height:30px;
    border-radius:7px;
  }
</style>