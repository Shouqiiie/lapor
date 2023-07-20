<?php
session_start();
unset($_SESSION[$username]);
session_destroy();

echo "<script>
        alert('Anda Berhasil Logout');
        window.location = 'login/index.php'
      </script>";

?>;