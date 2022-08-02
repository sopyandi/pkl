<?php

include "koneksi/koneksi.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $queri = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nik = '$id'");
    $data = mysqli_fetch_array($queri);

?>
   <center>
    <div class="out-box">
    <img src="img/<?= $data[4] ?>" alt="" id="im"><br><br>
    </div>
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
        width:190px;
        height:265px;
        border-radius:10px;
        margin-top:24%;
        
    }
    table{
        text-align:center;
    }
    .out-box {
    width: 300px;
    height:400px;
    background-image:url('img/p1.png');
    background-size:cover;
    border-radius: 10px;
    text-align: center;

}
</style>