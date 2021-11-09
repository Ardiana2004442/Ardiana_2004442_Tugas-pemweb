<?php

    include("koneksi.php");

    $id_nelayan = $_POST['id_nelayan'];
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
    $id_nelayan = $_POST['id_nelayan'];

    $query = "update formulirpermohonan set nama = '$nama', jenis_kelamin = '$jenis_kelamin', tempat_tanggallahir = '$tempat_tanggallahir', nomor_induk_kependudukan = '$nomor_induk_kependudukan' , alamat = '$alamat', status_perkawinan = '$status_perkawinan', status_dalamkeluarga = '$status_dalamkeluarga', jumlah_anggota_keluarga = '$jumlah_anggota_keluarga', jumlah_tanggungan = '$jumlah_tanggungan', pendidikan_terakhir = '$pendidikan_terakhir', nomor_handphone = '$nomor_handphone', statuskenelayanan = '$statuskenelayanan', ukuran_kapal = '$ukuran_kapal', jabatan_dikapal= '$jabatan_dikapal', jenis_alat_tangkap = '$jenis_alat_tangkap', pendapatan_rataperbulan = '$pendapatan_rataperbulan'  where id_nelayan = $id_nelayan";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_nelayan= $id_nelayan");
    }

?>