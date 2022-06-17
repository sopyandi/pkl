<form method="post">
  <table>
    <tr>
      <td>Masukan id</td>
      <td><input type="text" name="id"></td>
    </tr>
    <tr>
      <td>Masukan Judul</td>
      <td><input type="text" name="judul"></td>
    </tr>
    <tr>
      <td>Deskription</td>
      <td><textarea name="desk" cols="23" rows="3"></textarea></td>
    </tr>
    <tr>
      <td>Tgl Publis</td>
      <td><input type="date" name="tgl"></td>
    </tr>
    <tr>
      <td>Penulis</td>
      <td><input type="text" name="penulis"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="simpan" class="btn btn-success" value="simpan"></td>
    </tr>
  </table>
</form>
<?php
if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $desk = $_POST['desk'];
  $tgl = $_POST['tgl'];
  $penulis = $_POST['penulis'];

  include "koneksi/koneksi.php";
  $simpan = mysqli_query($koneksi, "INSERT INTO berita VALUE('$id','$judul','$desk','$tgl','$penulis')");
  if (mysqli_affected_rows($koneksi) > 0) {
    header('location:index.php?page=berita');
  }
}
?>