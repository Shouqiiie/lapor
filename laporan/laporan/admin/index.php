<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "<script>
            alert('Silahkan login terlebih dahulu');
            window.location = '../login/index.php';
            </script>";
}
?>

<?php require '../layout/sidebar-admin.php'; ?>

<div class="main">
    <h2>Hi, Selamat Datang <?php echo $_SESSION["nama_lengkap"]; ?></h2>
</div>