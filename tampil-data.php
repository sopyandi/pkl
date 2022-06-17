<table border="2">
    <tr>
        <th>No</th>
        <th>Id</th>
        <th>Judul</th>
        <th>Deskription</th>
        <th>Tgl Publish</th>
        <th>penulis</th>
        <th>manipulasi</th>
    </tr>
    <?php
    include "koneksi/koneksi.php";
    if (isset($_POST['cari'])) {
        # code...
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM berita ");
    }
    $no = 1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data[0] ?></td>
            <td><?= $data[1] ?></td>
            <td><?= $data[2] ?></td>
            <td><?= $data[3] ?></td>
            <td><?= $data[4] ?></td>
            <td>
                <a href="index.php?page=edit&id=<?= $data[0] ?>"><button style="background-color:yellow;">edit</button></a>
                <a href="hapus.php?page=edit&id= <?= $data[0] ?>"><button style="background-color:red;">hapus</button></a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>