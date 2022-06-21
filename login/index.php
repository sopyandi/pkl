<?php
 session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="images/ii.png" type="image/gif" style="width:200px;">
    <title>login Kemenag Tasikmalaya</title>
  </head>
  <body>
    <div id="preloader"></div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid" style="margin-top:10%;">
          <center>
          <img src="images/ii.png" alt="" style="margin-top:-115%;margin-left:31%;width:37%;height:205px;border-radius:10px;">
          </center>
          <img src="images/js.gif" alt="" style="width:43.5%; height:125px; margin-top:-57%;margin-left:28.5%;">
          <img src="images/ss.PNG" alt="" style="width:30%;margin-top:-130%;margin-left:27%;width:20%;">
          <img src="images/p.gif" alt="" style="width:30%;margin-top:-130%;margin-left:-21%;width:20%;height:100px;">


        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Silahkan Login </h3>
              <p class="mb-4">Pastikan Anda Telah Terdaftar ,Jika Belum Bisa Hubungi Tim It Kemenag Tasikmalaya</p>
            </div>
            <form  method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="user" class="form-control" id="username">
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="pas" class="form-control" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary" name="login">

              <span class="d-block text-left my-4 text-muted"> or sign in with</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/rian.js"></script>
  </body>
  <script type="text/javascript">
    $(window).load(function() {$("#preloader").delay(3000).fadeOut("slow");})
    </script>
</html>
<?php
if(isset($_POST['login'])){
  include "../koneksi/koneksi.php";
$username = $_POST['user'];
$password = $_POST['pas'];

$query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nama='$username' AND nik='$password'");
$cek = mysqli_num_rows($query);
if($cek > 0){
$_SESSION['nik'] = $password;
header('location:../?page=berita');
}else{
echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";

}
}
?>
<style>
  label{
    margin-top:-5.5%;
  }
</style>