<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "<script>
            alert('Silahkan login terlebih dahulu');
            window.location = '../login/index.php';
            </script>";
}

if(isset($_POST["submit"])){
    if(tambahTanggapan($_POST) > 0){
        echo "<script>
                alert('Tanggapan berhasil dikirim');
                window.location = 'laporan.php';
              </script>";
    }else{
        echo "<script>
                alert('Tanggapan berhasil dikirim');
                window.location = 'laporan.php';
              </script>";
    }
}
?>

<?php require '../layout/sidebar-admin.php'; ?>

<div class="main">
    <h1>Tolong Beri Tanggapan</h1>
    <div class="tanggapan">
        <form action="" method="post">
            <input type="text" name="id_laporan" value="<?php echo $_GET["id"]; ?>"><br><br>
            <label for="">Beri Tanggapan</label><br>
            <textarea name="isi_tanggapan" id="" cols="30" rows="6"></textarea><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</div>