<?php
include 'config/connect.php';

if (isset($_POST['tombol'])){


$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from siswa where username='$username' and password='$password'";
$result = mysqli_query($is_connect, $query);

if (mysqli_num_rows($result) > 0 ) {
    header('Location: ./');

} else {
    echo 'Login gagal! Username atau Password SALAH!';
}}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <!-- <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/logo.png" width="160" alt="">
                </a> -->
                <p class="text-center">Login Aplikasi Eazyn</p>
                <form action="login.php" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label" >Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <!-- <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a> -->
                  </div>
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="tombol">Sign In</button>
                  <!-- 
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Eazyn?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.">Create an account</a>
                  </div>
                   -->


                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>