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

function tambahLaporan($data){
    global $conn;

    date_default_timezone_set('Asia/Jakarta');

    $nama_pelapor = $data["nama_pelapor"];
    $tanggal = date('Y-m-d');
    $waktu = date("H:i:s");
    $isi_laporan = $data["isi_laporan"];
    $bukti = $_FILES["bukti"]["name"];
    $files = $_FILES["bukti"]["tmp_name"];
    $status = 'Proses';
    
    $query = "INSERT INTO laporan VALUES(NULL, '$nama_pelapor', '$tanggal', '$waktu', '$isi_laporan', '$bukti', '$status')";

    move_uploaded_file($files, "../assets/image/" . $bukti);
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}   


?>