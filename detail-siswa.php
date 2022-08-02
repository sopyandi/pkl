<?php

include "koneksi/koneksi.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $queri = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nik = '$id'");
    $data = mysqli_fetch_array($queri);

?>
   <center>
    <img src="img/<?= $data[4] ?>" alt="" style="width:25%;height:45%;" id="im"><br><br>
    <table>
    <tr>
            <td><b>nama :</b></td>
            <td><b><?=$data[1]?></b></td>
        </tr>
        <tr>
            <td><b>kelas  :</b></td>
            <td><b><?=$data[3]?></b></td>
        </tr>
    </table>
   </center>

<?php
}
?>
<style>
    #im{
        border:4px solid black;
        border-radius:10px;
        box-shadow: 10px 10px 10px 10px;
        
    }
    table{
        text-align:center;
    }
</style>