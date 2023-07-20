<?php

session_start();
require 'functions.php';

if (!isset($_SESSION["username"])) {
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

$id = $_GET["id"];

?>

<?php require '../layout/sidebar-admin.php'; ?>

<div class="main">
    <br /><br />
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama Pelapor</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Isi Laporan</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Tanggapan</th>
            <th>Opsi</th>
        </tr>
        <?php $laporan2 = mysqli_query($conn, "SELECT laporan.id_laporan, laporan.nama_pelapor, laporan.tanggal, laporan.waktu, laporan.isi_laporan, laporan.bukti, laporan.status, tanggapan.id_tanggapan, tanggapan.id_laporan, tanggapan.isi_tanggapan FROM laporan INNER JOIN tanggapan ON laporan.id_laporan = tanggapan.id_laporan WHERE laporan.id_laporan = '$id'");
        while ($laporan = mysqli_fetch_array($laporan2)) : ?>
            <tr>
                <td><?= $laporan["nama_pelapor"]; ?></td>
                <td><?= $laporan["tanggal"]; ?></td>
                <td><?= $laporan["waktu"]; ?></td>
                <td><?= $laporan["isi_laporan"]; ?></td>
                <td><img src="../assets/image/<?= $laporan["bukti"]; ?> " width="200"></td>

                <?php if ($laporan["status"] == "Selesai") {
                ?>
                    <td><?= $laporan["status"]; ?></td>
                    <td><?= $laporan["isi_tanggapan"]; ?></td>
                    <td><a href="">Hapus</a></td>
                <?php
                }
                ?>
            </tr>
        <?php endwhile; ?>
    </table>
</div>