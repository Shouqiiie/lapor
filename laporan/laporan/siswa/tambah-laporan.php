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
    if(tambahLaporan($_POST) > 0){
        echo "<script>
                alert('data berhasil ditambahkan!');
                window.location = 'laporan.php';
            </script>";
    }else{
        echo "<script>
                alert('data gagal ditambahkan!');
                window.location = 'index.php';
            </script>";
    }
}


$laporan = query("SELECT * FROM laporan WHERE nama_pelapor = '{$_SESSION['nama_lengkap']}'");

?>

<?php require '../layout/sidebar-siswa.php'; ?>

<div class="main">
    <form action="" method="post" enctype="multipart/form-data">
        <label>Nama Pelapor</label><br>
        <input type="text" name="nama_pelapor" value="<?php echo $_SESSION["nama_lengkap"]; ?>"><br><br>

        <label>Isi Laporan</label><br>
        <textarea name="isi_laporan" cols="40" rows="5"></textarea><br><br>

        <label>Upload Bukti</label><br/>
        <input type="file" name="bukti"><br><br>

        <button type="submit" name="submit">Tambah!</button>
    </form>
</div>