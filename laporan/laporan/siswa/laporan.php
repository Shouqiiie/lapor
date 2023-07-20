<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "<script>
            alert('Silahkan login terlebih dahulu');
            window.location = '../login/index.php';
            </script>";
}

$laporan = query("SELECT * FROM laporan WHERE nama_pelapor = '{$_SESSION['nama_lengkap']}'");

?>

<?php require '../layout/sidebar-siswa.php'; ?><br>

<div class="main">
    <a href="tambah-laporan.php">Tambah Laporan</a>

    <table border="1" cellpadding="10" cellspacing="0"><br><br>
    <tr>
        <th>No</th>
        <th>Nama Pelapor</th>
        <th>Tanggal</th>
        <th>Waku</th>
        <th>Isi Laporan</th>
        <th>Bukti</th>
        <th>Status</th>
        <th>Tanggapan</th>
    </tr>
    <?php $i = 1; ?>
        <?php foreach($laporan as $data) :?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data["nama_pelapor"]; ?></td>
            <td><?php echo $data["tanggal"]; ?></td>
            <td><?php echo $data["waktu"]; ?></td>
            <td><?php echo $data["isi_laporan"]; ?></td>
            <td><img src="../assets/image/<?php echo $data["bukti"]; ?>" alt="" width="100"></td>
            <td><?php echo $data["status"]; ?></td>
            <td>
                <a href="tanggapan.php">Lihat Tanggapan</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>