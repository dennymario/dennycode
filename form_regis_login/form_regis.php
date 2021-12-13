<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="stylesheet.css">
    <meta charset="utf-8">
    <title>Form Registrasi</title>
  </head>
  <body>
    <form class="box-regis" action="regis.php" method="post">
      <h1>Registrasi </h1>
      <table>
        <tr>
          <td><input type="text" name="username" placeholder="Buat username baru" required></td>
        </tr>
        <tr>
          <td><input type="text" name="nama" placeholder="Nama lengkap anda" required></td>
        </tr>
        <tr>
          <td><input type="email" name="email" placeholder="Masukkan email" required></td>
        </tr>
        <tr>
          <td><input type="password" name="password" placeholder="Masukkan Password baru" required></td>
        </tr>
        <tr>
          <td><input type="password" name="konfirmasi_password" placeholder="Konfirmasi Password" required></td>
        </tr>
        <tr>
          <td><input type="text" name="umur" placeholder="Masukkan umur" required></td>
        </tr>
        <tr>
          <td><input type="text" name="jenis_kelamin" placeholder="Jenis kelamin" required></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit-regis" value="DAFTAR"></td>
        </tr>
      </table>
    </form>
  <p><a href="index.php">BACK<a></p>
  </body>
</html>
