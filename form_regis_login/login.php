<?php
session_start();
//koneksi ke database
include 'koneksi.php';
//menangkap data form login
$email=$_POST['email'];
$password=$_POST['password'];
//checking data di database
$data=mysqli_query($dbc,"select * from tbl_user where email='$email' and password='$password'");
//menghitung data yang ditemukan
$cek =mysqli_num_rows($data);
if($cek>0){
  $_SESSION['email']=$email;
  $_SESSION['status']="login";
  header("location:home.php");
}
else {
  header("location:form_login.php?gagal-login");
}
?>
