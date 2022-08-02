<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
    // menampilkan data berita yang mempunyai kategori berita utama
        include "koneksi/koneksi.php";
        $berita_utama = '1';
        $query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_kategori = '$berita_utama'");
        $data = mysqli_fetch_array($query);
        if ($data[4] == '1') {
        $foto = $data[5];
        $judul = $data[1];
        $deskripsi = $data[3];
        $waktu_publish = $data[2];
      }
    ?>
        <tr>
            <td width="37%">
            <div class="b1">
            <img src="foto-berita/<?=$foto?>" alt="">
            </div>
            </td>
            <td>
            <div class="info-b1">
             <b><?=$judul?></b>
             <p><?=$deskripsi?></p>
             <h5><?=$waktu_publish?></h5>
             </div>
            </td>
        </tr>
    </table>
    <hr>
    <!-- berita kemenag -->
    <table id="berita-kemenag">
        <h6>berita kemenag</h6>
        <?php
        include "koneksi/koneksi.php";
        $berita_kemenag = '2';
        $query = mysqli_query($koneksi,"SELECT * FROM berita WHERE id_kategori = '$berita_kemenag'");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td>
            <div class="b-content-1">
           <img src="foto-berita/<?= $data[5]?>" alt="">
           </div>
            </td>
            <td>
           <b><?=$data[1]?></b>
           <p><?=$data[3]?></p>
           <h5 style="font-size:100%;"><?=$data[2]?></h5>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <!-- berita luar -->
    <table id="berita-luar">
        <?php
        include "koneksi/koneksi.php";
        $berita_luar = '3';
        $query = mysqli_query($koneksi,"SELECT * FROM berita WHERE id_kategori = '$berita_luar'");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td>
            <div class="b-content-1">
           <img src="foto-berita/<?= $data[5]?>" alt="">
           </div>
            </td>
            <td>
           <b><?=$data[1]?></b>
           <p><?=$data[3]?></p>
           <h5 style="font-size:100%;"><?=$data[2]?></h5>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
<style>
#berita-kemenag{
    width:38%;
    position: absolute;
}
#berita-luar{
    width:38%;  
    position: absolute;
    margin-left:38%;
}

</style>