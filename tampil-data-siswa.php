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
                <div class="box">
                    <img src="img/<?= $data[4] ?>" alt="" style="width:100%;height:100%;">
                </div>
                <center>
                    <b><?= $data[1] ?></b>
                    <table>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="index.php?page=detail&id=<?=$data[0]?>"><button style="background-color:green;">detail</button></a>
                                <a href="index.php?page=editsiswa&id=<?=$data[0]?>"><button style="background-color:yellow;">edit</button></a>
                                <a href="hapus.php?ids=<?= $data[0] ?>"><button style="background-color:red;">hapus</button></a>
                            </td>
                        </tr>
                    </table>
                </center>
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
    button:hover{
        zoom:102%;
        box-shadow:5px 5px 5px 5px ;
    }
    .kosong{

        width: 180px;
        height: 295PX;
    }

    .out-box {
        width: 180px;
        height: 275PX;
        border: 2px solid black;
        border-radius: 10px;
        text-align: center;

    }
    .out-box:hover{
        background-color:#28a745    ;
        zoom:105%;
        color:white;
        /* box-shadow: 10px 10px 10px 10px; */


    }

    .box {
        text-align: center;
        margin-left: -1%;
        width: 101%;
        height: 190PX;
        border: 4px solid black;
        border-radius: 10px;

    }
    .body{
        /* background-color:yellow; */
        display:grid;
        grid-template-columns:auto auto auto auto;
        overflow:auto;
    }
 
    b:hover{
    zoom:110%;
    }
</style>