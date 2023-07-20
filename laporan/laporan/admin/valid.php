<?php
require '../koneksi.php';

$id = $_GET["id"];
$query = mysqli_query($conn, "UPDATE laporan SET status = 'Valid' WHERE id_laporan = '$id'");

if($query){
    echo "<script>
            alert('Status Berhasil diubah!');
            window.location = 'laporan.php';
        </script>";
}

?>