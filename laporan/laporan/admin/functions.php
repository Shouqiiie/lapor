<?php
require '../koneksi.php';

function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }

    return $rows;
}

function tambahTanggapan($data){
    global $conn;

    $id_laporan = $data["id_laporan"];
    $isi_tanggapan = $data["isi_tanggapan"];

    $query = "INSERT INTO tanggapan VALUES (null, '$id_laporan', '$isi_tanggapan')";
    mysqli_query($conn, $query);

    if($query){
        $updateStatus = mysqli_query($conn, "UPDATE laporan SET status = 'Selesai' WHERE id_laporan = '$id_laporan'");
    }

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM laporan WHERE
               nama_pelapor LIKE '%$keyword%' OR    
               tanggal LIKE '%$keyword%' OR
               waktu LIKE '%$keyword%' OR
               isi_laporan LIKE '%$keyword%'
               ";

    return query($query);
}


?>