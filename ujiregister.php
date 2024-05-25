<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Design by foolishdeveloper.com -->
  <link rel="stylesheet" href="css/register.css">
  <title>GRegister</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!--Stylesheet-->
  <style media="screen">


  </style>
</head>

<body>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <?
  // $key = random_int(111,999)
  ?>
   <!-- <form class="formku" method="post" action="index.php?regucp=<?php
    // echo $_POST['ucp']; ?>&key=<?php 
    // echo $key; ?>"> -->
  <form class="formku" method="POST" action="register.php">
    <h6>Pendaftaran Account UCP</h6>
    <div class="mb-3">
      <label for="email" class="form-label">Alamat Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan alamat email" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password"
        required>
    </div>
    <div class="mb-3">
      <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
      <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password"
        placeholder="Masukkan kembali password" required>
      <div id="message" class="mt-2"></div>
    </div>
    <div class="btnku">
    <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
      <input class="btn btn-success m-2" type="submit" name="submit" value="Register">
      <!-- <a class="btn btn-light m-2" href="./index.php?page=login" type="button" class="btn btn-secondary">Log in</a> -->
    </div>
  </form>
  
</body>

</html>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
//  $(document).ready(function() {
//     $('#konfirmasi_password').on('keyup', function () {
//         if ($('#password').val() == $('#konfirmasi_password').val()) {
//             $('#message').html('Password cocok').css('color', 'green');
//         } else if ($('#password').val() == '' || $('#konfirmasi_password').val() == '') {
//             $('#message').html('Harap mengisi password').css('color', 'red');
//         } else {
//             $('#message').html('Password tidak cocok').css('color', 'red');
//         }
//     });
//     $('#password').on('keyup', function () {
//         if ($('#password').val() == $('#konfirmasi_password').val()) {
//             $('#message').html('Password cocok').css('color', 'green');
//         } else if ($('#password').val() == '' || $('#konfirmasi_password').val() == '') {
//             $('#message').html('Harap mengisi password').css('color', 'red');
//         } else {
//             $('#message').html('Password tidak cocok').css('color', 'red');
//         }
//     });
// });
// </script>