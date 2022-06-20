<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "koneksi/koneksi.php";
    if (isset($_POST['cari'])) {
        # code...
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM siswa ");
    }
    $no = 1;
    ?>
    <div class="body">
    <?php
    while ($data = mysqli_fetch_array($query)) {
    ?>
           <div class="kosong">
            <div class="out-box">
                <br>
                <div class="box">
                    <img src="img/<?= $data[4] ?>" alt="" style="width:100%;height:100%;border-radius:4%;">
                    <div class="info">
                    <b><?= $data[1]?></b>
                    </div>
                </div>
                
            </div>
        </div>
        <?php

        $no++;
    }
        ?>
        </div>
</body>

</html>

<style>
    button {
        border-radius: 10px;
    }
    .kosong{

        width: 180px;
        height:300PX;
    }

    .out-box {
        width: 230px;
        height:310px;
        background-image:url('img/p1.png');
        background-size:cover;
        border-radius: 10px;
        text-align: center;

    }

    .box {
        text-align: center;
        margin-left:20%;
        margin-top:13%;
        width: 60%;
        height: 200PX;
        border-radius: 10px;
        display:block;
        position: relative;

    }
    .out-box :hover .info{
        display:block;
    }
    
    .body{
        display:grid;
        grid-template-columns:auto auto auto auto;
        overflow:auto;
    }
    b{
        margin-top:-15%;
        display:none;
    }
</style>