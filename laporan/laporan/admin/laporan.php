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

$laporan = query("SELECT * FROM laporan");

?>

<?php require '../layout/sidebar-admin.php'; ?>

<div class="main">
    <br /><br />
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama Pelapor</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Isi Laporan</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Tanggapan</th>
            <th>Verifikasi Status</th>
            <th>Opsi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($laporan as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_pelapor"]; ?></td>
                <td><?= $data["tanggal"]; ?></td>
                <td><?= $data["waktu"]; ?></td>
                <td><?= $data["isi_laporan"]; ?></td>
                <td><img src="../assets/image/<?= $data["bukti"]; ?>" width="100"></td>
                <td><?= $data["status"]; ?></td>
                <td>
                    <?php if ($data["status"] == "Proses") : ?>
                        <span>Silahkan validasi data terlebih dahulu!</span>
                    <?php endif; ?>
                    <?php if ($data["status"] == "Valid") : ?>
                        <a href="tanggapan.php?id=<?= $data["id_laporan"]; ?>">Beri Tanggapan</a>
                    <?php endif; ?>
                    <?php if ($data["status"] == "Selesai") : ?>
                        <span>Sudah ditanggapi</span>
                    <?php endif; ?>
                    <?php if ($data["status"] == "Tidak Valid") : ?>
                        <span>-</span>
                    <?php endif; ?>
                </td>

                <td>
                    <?php if ($data["status"] == "Proses") {
                    ?>
                        <a href="valid.php?id=<?= $data["id_laporan"]; ?>" onClick="return confirm('Apakah anda yakin ingin mengubah status laporan ini?')">Valid</a>
                        <a href="tidak_valid.php?id=<?= $data["id_laporan"]; ?>" onClick="return confirm('Apakah anda yakin ingin mengubah status laporan ini?')">Tidak Valid</a>
                </td>
            <?php
                    } else if ($data["status"] == "Valid") {
            ?>
                <span>Laporan sudah validm, silahkan beri tanggapan</span>
            <?php
                    } else if ($data["status"] == "Selesai") {
            ?>
                <span>Laporan sudah selesai ditindaklanjuti</span>
            <?php
                    } else {
            ?>
                <span>Laporan tidak valid, laporan tidak diterima!</span>
            <?php
                    } ?>
            <td>
                <?php if ($data["status"] == "Selesai") : ?>
                    <a href="detail_laporan.php?id=<?= $data["id_laporan"]; ?>">Detail</a>
                <?php endif; ?>
                <a href="hapus_laporan.php">Hapus</a>
            </td>

            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>