<?php

    include("koneksi.php");

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_tanggallahir = $_POST['tempat_tanggallahir'];
    $nomor_induk_kependudukan = $_POST['nomor_induk_kependudukan'];
    $alamat = $_POST['alamat'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $status_dalamkeluarga = $_POST['status_dalamkeluarga'];
    $jumlah_anggota_keluarga = $_POST['jumlah_anggota_keluarga'];
    $jumlah_tanggungan = $_POST['jumlah_tanggungan'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $nomor_handphone = $_POST['nomor_handphone'];
    $statuskenelayanan = $_POST['statuskenelayanan'];
    $ukuran_kapal = $_POST['ukuran_kapal'];
    $jabatan_dikapal = $_POST['jabatan_dikapal'];
    $jenis_alat_tangkap = $_POST['jenis_alat_tangkap'];
    $pendapatan_rataperbulan = $_POST['pendapatan_rataperbulan'];
    $id_nelayan = $_POST ['id_nelayan'];

    $query = "insert into formulirpermohonan values ('', '$nama', '$jenis_kelamin', '$tempat_tanggallahir', '$nomor_induk_kependudukan', '$alamat', '$status_perkawinan', '$status_dalamkeluarga', '$jumlah_anggota_keluarga', '$jumlah_tanggungan', '$pendidikan_terakhir', '$nomor_handphone', '$statuskenelayanan', '$ukuran_kapal', '$jabatan_dikapal', '$jenis_alat_tangkap', '$pendapatan_rataperbulan', $id_nelayan)";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_nelayan=$id_nelayan");
    }

?>