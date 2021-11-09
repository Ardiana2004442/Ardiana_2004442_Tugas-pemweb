<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Formulir Permohonan Penerbitan Kartu Nelayan</title>
</head>
<body>

    <?php
        include ("koneksi.php");
        $id_nelayan = $_GET['id_nelayan'];

        $query = "select * from formulirpermohonan where id_nelayan = $id_nelayan";
        $hasil = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($hasil);
    ?>
    
    <hr size="12px" color="black">
    <center style="background-color: #C1AE7C" >
              <h1>Edit Data </h1>
    </center>
    <hr size="12px" color="black">
    <form action="proses_edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id_nelayan" value="<?php echo $row['id_nelayan']; ?>">
            <table style="width:100%">
                <tbody>
                    <tr>
                        <td align="left"> <b> Nama  </b>&nbsp;</td>
                        <td  colspan="10">: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
                    </tr>

                    <tr>
                        <td align="left"><b>Jenis Kelamin</b></td>
                        <td align="left">: <input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>"> <br></td>
                        
                    </tr>

                    <tr>
                        <td align="left"><b>Tanggal Lahir</b></td>
                        <td colspan="10">: <input type="date" name="tempat_tanggallahir" value="<?php echo $row['tempat_tanggallahir']; ?>"/></td>
                    </tr>

                    <tr>
                        <td align="left"> <b> Nomor Induk Kependudukan  </b>&nbsp;</td>
                        <td  colspan="10">: <input type="text" name="nomor_induk_kependudukan" value="<?php echo $row['nomor_induk_kependudukan']; ?>"></td>
                    </tr>
                    <br><br>
                    <tr>
                        <td><b>Alamat </b></td>
                        <td  colspan="10">: <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
                    </tr>


                    <tr>
                        <td align="left"> <b> Status Perkawinan </b></td>
                        <td align="left">: <input type="text" name="status_perkawinan" value="<?php echo $row['status_perkawinan']; ?>"> <br></td>
                        
                    </tr>

                    <tr>
                        <td align="left"> <b> Status Dalam Keluarga </b></td>
                        <td >: <input type="text" name="status_dalamkeluarga" value="<?php echo $row['status_dalamkeluarga']; ?>"> </td>
                        
                    </tr>

                    <tr>
                        <td align="left"> <b> Jumlah Anggota Keluarga  </b>&nbsp;</td>
                        <td  colspan="10">: <input type="text" name="jumlah_anggota_keluarga" value="<?php echo $row['jumlah_anggota_keluarga']; ?>"></td>
                    </tr>

                    <tr>
                        <td align="left"> <b> Jumlah Tanggungan  </b>&nbsp;</td>
                        <td  colspan="10">: <input type="text" name="jumlah_tanggungan" value="<?php echo $row['jumlah_tanggungan']; ?>"></td>
                    </tr>

                    <tr>
                        <td align="left"> <b> Pendidikan Terakhir </b></td>
                        <td >: <input type="text" name="pendidikan_terakhir" value="<?php echo $row['pendidikan_terakhir']; ?>"> </td>
                    </tr>

                    <tr>
                        <td align="left"> <b> Nomor Handphone  </b>&nbsp;</td>
                        <td  colspan="10">: <input type="text" name="nomor_handphone" value="<?php echo $row['nomor_handphone']; ?>"></td>
                    </tr>

                    <tr>
                        <td align="left"> <b> Status Kenelayanan </b></td>
                        <td align="left">: <input type="text" name="statuskenelayanan" value="<?php echo $row['statuskenelayanan']; ?>"><br></td>

                    </tr>

                    <tr>
                        <td align="left"> <b> Ukuran Kapal </b></td>
                        <td >: <input type="text" name="ukuran_kapal" value="<?php echo $row['ukuran_kapal']; ?>"> </td>
                    </tr>

                    <tr>
                        <td align="left"> <b> Jabatan di Kapal </b></td>
                        <td >: <input type="text" name="jabatan_dikapal" value="<?php echo $row['jabatan_dikapal']; ?>"> </td>

                    </tr>

                    <tr>
                        <td align="left"> <b> Jenis Alat Tangkap  </b></td>
                        <td  colspan="10">: <input type="text" name="jenis_alat_tangkap" value="<?php echo $row['jenis_alat_tangkap']; ?>"></td>
                    </tr>

                    <tr>
                        <td align="left"> <b> Pendapatan Rata-rata Perbulan  </b></td>
                        <td  colspan="10">: <input type="text" name="pendapatan_rataperbulan" value="<?php echo $row['pendapatan_rataperbulan']; ?>"></td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <input type="submit" value="simpan">
        </fieldset>
        
    </form>
</body>
</html>