<?php
//click tombol daftar
if(isset($_POST['submit-regis'])){
  //koneksi ke database
  include 'koneksi.php';
  //tampung value
  $username=mysqli_real_escape_string($dbc,trim($_POST['username']));
  $nama=mysqli_real_escape_string($dbc,trim($_POST['nama']));
  $email=mysqli_real_escape_string($dbc,trim($_POST['email']));
  $password=mysqli_real_escape_string($dbc,trim($_POST['password']));
  $konfirmasi_password=mysqli_real_escape_string($dbc,trim($_POST['konfirmasi_password']));
  $umur=mysqli_real_escape_string($dbc,trim($_POST['umur']));
  $jenis_kelamin=mysqli_real_escape_string($dbc,trim($_POST['jenis_kelamin']));

  //cek password Konfirmasi apakah sudah benar
  if($password!=$konfirmasi_password){
    header('location:form_regis.php?Repeat-your-Password-correctly');
  } else {
    //proses ke DB_DATABASE
    $sql='insert into tbl_user values("'.$username.'","'.$nama.'","'.$email.'","'.$password.'","'.$umur.'","'.$jenis_kelamin.'")';
      mysqli_query($dbc,$sql);
      header('location: form_regis.php?register-succes');
  }
}
 ?>
