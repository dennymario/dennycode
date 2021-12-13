<?php
//mengaktifkan session
session_start();
//menghapus session
session_destroy();
//mengalihkan ke halaman login
header("location:form_login.php?pesan=anda_telah_logout");
 ?>
