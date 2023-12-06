<?php
// panggil file database.php untuk koneksi ke database 
require_once "config/database.php"; 
if (isset($_POST['login'])) {
  # code...
  $user=$_POST['user'];
  $pass=MD5($_POST['pass']);

  $sql = mysqli_query($db,"SELECT * FROM tbl_admin WHERE user='$user' AND pass='$pass'");
  $data = mysqli_fetch_assoc($sql);
  $row = mysqli_num_rows($sql);

  if ($row>0){
      session_start();
      $_SESSION['level'] = $data['level'];
      $_SESSION['user'] = $data['user'];
      header("Location:index.php");
  }else{
    echo "<script>alert('Anda Gagal Login...!!!');</script>";
  }

}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Login</title>

  

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="asset/css/login.css">

  <!-- Bootstrap core CSS -->
  
  <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css" />
  



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="assets/css/login.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="card-body bg-org2  col-3 m-auto rounded" style = "background-color : DodgerBlue">
    <form class="form-signin" method="POST">
      <img class="mb-4" src="assets/img/256.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-bold">LOGIN</h1>
      <label class="sr-only ">Username</label>
      <input type="text" name="user" class="form-control mb-3 col-12" placeholder="Username" required>
      <label class="sr-only">Password</label>
      <input type="password" name="pass" class="form-control col-12" placeholder="Password" required>
      <button class="btn btn-lg bg-cok txt-org2 btn-block font-weight-bold mt-2 " style = "background-color : orange" name="login" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
    </form>
  </div>




</body>
<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<!-- sweetalert js -->


</html>