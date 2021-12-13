<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>Halaman Utama</h1>

<br>
  <!--Cek apakah berhasil Login-->
  <?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:form_login.php?pesan=belum_login");
  }
   ?>
   <h4>Selamat Datang,<?php echo $_SESSION['email']; ?>! anda berhasil login.</h4>
   <br/>
   <br/>

   <a href="logout.php">LOGOUT</a>
  </body>
</html>
