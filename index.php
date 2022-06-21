<?php
   session_start();
   if (!isset($_SESSION['nik'])){
       header("Location: login/");
   }
?>
<?php
if (isset($_GET['page'])) {
  $acp = $_GET['page'];
}
?>
<?php
include "koneksi/koneksi.php";
 $foto = $_SESSION['nik'];
$query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nik='$foto'");
$foto = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">

<head>
  <title>kemenag tasikmalaya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="login/images/ii.png" sizes="32x32">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="index.php" class="logo">Kemenag Kab.</a></h1>
      <ul class="list-unstyled components mb-5">
        <li>
          <div class="propil">
          <img src="img/<?= $foto['poto']?>" id="img" >
        <img src="img/logop.png" alt="" id="i">

        </div>
        <br>
        </li>
        <li class="<?php if($acp == 'berita'){echo"active";}if($acp == 'edit' ){echo"active";} ?>">
        <div class="garis"></div>
          <a href="index.php?page=berita"><span class="fa fa-home mr-3"></span>Berita</a>
        </li>
        <li class="<?php if($acp == 'siswa' ){echo"active";}if($acp == 'detail' ){echo"active";}if($acp == 'editsiswa' ){echo"active";} ?>">
          <a href="index.php?page=siswa"><span class="fa fa-user mr-3"></span>Siswa</a>
        </li>

        <li class="<?php if($acp == 'upload'){echo"active";} ?>">
          <a href="index.php?page=upload"><span class="fa fa-paper-plane mr-3"></span>upload berita</a>
        </li>
        <li class="<?php if($acp == 'upload-siswa'){echo"active";} ?>">
          <a href="index.php?page=upload-siswa"><span class="fa fa-paper-plane mr-3"></span>upload data siswa</a>
        </li>
      </ul>

    </nav>
    <?php
    if (isset($_GET['page'])) {
      $id = $_GET['page'];
      if ($id == 'berita') {
        $name_page = "tampilan berita aktual";
      } else if ($id == 'upload') {
        $name_page = "upload berita";
      } else if ($id == 'siswa') {
        $name_page = "Data Petugas Kemenag";
      } else if ($id == 'upload-siswa') {
        $name_page = "upload data siswa";
      }else if ($id == 'detail') {
        $name_page = "detail siswa";
      }else if ($id == 'edit') {
        $name_page = "edit berita";
      }else if ($id == 'editsiswa') {
        $name_page = "edit data siswa";
      }
    }else{
      header('location:login');
    }
    ?>
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      <h2><?= $name_page ?></h2>
      <div id="preloader"></div>
      <p>
        <?php
        if (isset($_GET['page'])) {
          $id = $_GET['page'];
          if ($id == 'berita') {
            include "tampil-data.php";
          } else if ($id == 'upload') {
            include "upload.php";
          } else if ($id == 'edit') {
            include "edit.php";
          } else if ($id == 'siswa') {
            include "tampil-data-siswa.php";
          } else if ($id == 'upload-siswa') {
            include "upload-siswa.php";
          } else if ($id == 'edit') {
            include "edit.php";
          }else if ($id == 'detail') {
            include "detail-siswa.php";
          }else if ($id == 'editsiswa') {
            include "edit-siswa.php";
          }
        }
        ?>
      </p>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
<script type="text/javascript">
    $(window).load(function() {$("#preloader").delay(1500).fadeOut("slow");})
    </script>
</html>
<style>
   /* @font-face {
  font-family:rian;
  src: url('fonts/Lobster-Regular.ttf');
}
h2{
  font-family:rian;
} */
  body{
    background-color:#f8fafb;
  }
  input,textarea,select{
    background-color:#f8fafb;
  }
  #i{
margin-top:-119%;
margin-left:370%;
  }
</style>