<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tampilan-data-petugas.css">
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
          <div class="info">
                    <b></b>
           <div class="kosong">
            <div class="out-box">
                <br>
                <div class="box">
                    <a href="index.php?page=detail&id=<?= $data[0]?>"><img src="img/<?= $data[4] ?>" alt="" style="width:100%;height:100%;border-radius:4%;"></a>
                    <img src="img/candri.png" alt="" id="hover">
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
