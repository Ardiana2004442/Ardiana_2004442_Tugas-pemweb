<!DOCTYPE html>
<html lang="en">
<head>

     <title>Formulir Permohonan Penerbitan Kartu Nelayan </title>
     
</head>
<body>

<?php
    include ("koneksi.php");

    $query = "select * from formulirpermohonan";
    $hasil = mysqli_query($koneksi, $query);
?>
    <fieldset> 
    <center>
            <img src="https://bit.ly/KementrianKelautandanPerikanan" width="150" height="150"
    </center>
    <hr size="12px" color="black">
    <center style="background-color: #C1AE7C" >
              <h1>FORMULIR PERMOHONAN PENERBITAN KARTU NELAYAN </h1>
    </center>
    <hr size="12px" color="black">
    <form action="proses_insert.php" method="POST">
        
            <br><br>
            <h6 align="right">BULAN DAN TAHUN :
                <input type="date"/>
            </h6>     
        <table border="1" cellspacing="0" cellpadding="12" width="100%">
            <tr>
                <td align="left"> <b> Nomor Urutan Permohonan  </b>&nbsp;</td>
                <td  colspan="10">: <input type="text" name="id_nelayan" value=""><br/></td>
                
            </tr>
            <tr>
                <td align="left"> <b> Nama  </b>&nbsp;</td>
                <td  colspan="10">: <input type="text" name="nama"></td>
            </tr>

            <tr>
                <td align="left"><b>Jenis Kelamin</b></td>
                <td align="left"><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki Laki<br></td>
                <td align="left"><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br></td>
             </tr>

             <tr>
                 <td align="left"><b>Tanggal Lahir</b></td>
                 <td colspan="10">: <input type="date" name="tempat_tanggallahir"/></td>
             </tr>

             <tr>
                <td align="left"> <b> Nomor Induk Kependudukan  </b>&nbsp;</td>
                <td  colspan="10">: <input type="text" name="nomor_induk_kependudukan"></td>
            </tr>
            <br><br>
             <tr>
                 <td><b>Alamat </b></td>
                 <td  colspan="10">: <input type="text" name="alamat"></td>
             </tr>


            <tr>
                <td align="left"> <b> Status Perkawinan </b></td>
                <td align="left"><input type="radio" name="status_perkawinan" value="Menikah"> Menikah<br></td>
                <td align="left"><input type="radio" name="status_perkawinan" value="Belum Menikah"> Belum Menikah<br></td>
            </tr>

            <tr>
                <td align="left"> <b> Status Dalam Keluarga </b></td>
                <td ><input type="radio" name="status_dalamkeluarga" value="Kepala Keluarga"> Kepala Keluarga</td>
                <td ><input type="radio" name="status_dalamkeluarga" value="Istri"> Istri</td>
                <td ><input type="radio" name="status_dalamkeluarga" value="Anak"> Anak</td>
                <td ><input type="radio" name="status_dalamkeluarga" value="Lainnya">Lainnya<br>
            </tr>

            <tr>
                <td align="left"> <b> Jumlah Anggota Keluarga  </b>&nbsp;</td>
                <td  colspan="10">: <input type="text" name="jumlah_anggota_keluarga"></td>
            </tr>

            <tr>
                <td align="left"> <b> Jumlah Tanggungan  </b>&nbsp;</td>
                <td  colspan="10">: <input type="text" name="jumlah_tanggungan"></td>
            </tr>

            <tr>
                <td align="left"> <b> Pendidikan Terakhir </b></td>
                <td ><input type="radio" name="pendidikan_terakhir" value="SD"> SD</td>
                <td ><input type="radio" name="pendidikan_terakhir" value="SMP"> SMP</td>
                <td ><input type="radio" name="pendidikan_terakhir" value="SMA"> SMA</td>
                <td ><input type="radio" name="pendidikan_terakhir" value="Sarjana">Sarjana<br>
            </tr>

            <tr>
                <td align="left"> <b> Nomor Handphone  </b>&nbsp;</td>
                <td  colspan="10">: <input type="text" name="nomor_handphone"></td>
            </tr>

            <tr>
                <td align="left"> <b> Status Kenelayanan </b></td>
                <td align="left"><input type="radio" name="statuskenelayanan" value="Nelayan Tetap">Nelayan Tetap<br></td>
                <td align="left"><input type="radio" name="statuskenelayanan" value="Nelayan Sambilan"> Nelayan Sambilan<br></td>
            </tr>

            <tr>
                <td align="left"> <b> Ukuran Kapal </b></td>
                <td ><input type="radio" name="ukuran_kapal" value="0-10GT"> 0-10GT</td>
                <td ><input type="radio" name="ukuran_kapal" value="10-30GT"> 10-30GT</td>
                <td ><input type="radio" name="ukuran_kapal" value=">30GT"> >30GT</td>
                <td ><input type="radio" name="ukuran_kapal" value="Tanpa Perahu">Tanpa Perahu<br>
            </tr>

            <tr>
                <td align="left"> <b> Jabatan di Kapal </b></td>
                <td ><input type="radio" name="jabatan_dikapal" value="Nahkoda"> Nahkoda</td>
                <td ><input type="radio" name="jabatan_dikapal" value="Fishing Master"> Fishing Master</td>
                <td ><input type="radio" name="jabatan_dikapal" value="KKM"> KKM</td>
                <td ><input type="radio" name="jabatan_dikapal" value="ABK">ABK<br>
            </tr>

            <tr>
                <td align="left"> <b> Jenis Alat Tangkap  </b></td>
                <td  colspan="10">: <input type="text" name="jenis_alat_tangkap"></td>
            </tr>

            <tr>
                <td align="left"> <b> Pendapatan Rata-rata Perbulan  </b></td>
                <td  colspan="10">: <input type="text" name="pendapatan_rataperbulan"></td>
            </tr>
        </table>
        <br><br>
        <p align= "left"><b>Catatan:</b><br>
             Data-data yang dikirimkan adalah benar sesuai dengan dokumen aslinya. Apabila ketidakbenaran/pemalsuan terhadap data yang dikirimkan, pemohon bersedia dituntut dan diberikan sanksi sesuai ketentuan yang berlaku</p>
        </p> 
             <br><br>
             <input  type="submit" value="simpan">
            
            
        </fieldset>
    </form>
    </div>
</div>
    <br><br>
    <hr size="12px" color="black">
    <center style="background-color: #C1AE7C" >
              <h1>Tabel Formulir Permohonan Penerbitan Kartu Nelayan </h1>
    </center>
    <hr size="12px" color="black">
    <br>
    <table border="1">
        <tr>
            <th>Nomor Urutan Permohonan </th><br>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat/Tanggal/Lahir</th>
            <th>Nomor Induk Kependudukan  </th>
            <th>Alamat </th>
            <th>Status Perkawinan </th>
            <th>Status Dalam Keluarga </th>
            <th>Jumlah Anggota Keluarga  </th>
            <th>Jumlah Tanggungan  </th>
            <th>Pendidikan Terakhir </th>
            <th>Nomor Handphone  </th>
            <th>Status Kenelayanan </th>
            <th>Ukuran Kapal </th>
            <th>Jabatan di Kapal  </th>
            <th>Jenis Alat Tangkap  </th>
            <th>Pendapatan Rata-rata Perbulan   </th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id_nelayan']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['jenis_kelamin']."</td>";
            echo "<td>".$row['tempat_tanggallahir']."</td>";
            echo "<td>".$row['nomor_induk_kependudukan']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['status_perkawinan']."</td>";
            echo "<td>".$row['status_dalamkeluarga']."</td>";
            echo "<td>".$row['jumlah_anggota_keluarga']."</td>";
            echo "<td>".$row['jumlah_tanggungan']."</td>";
            echo "<td>".$row['pendidikan_terakhir']."</td>";
            echo "<td>".$row['nomor_handphone']."</td>";
            echo "<td>".$row['statuskenelayanan']."</td>";
            echo "<td>".$row['ukuran_kapal']."</td>";
            echo "<td>".$row['jabatan_dikapal']."</td>";
            echo "<td>".$row['jenis_alat_tangkap']."</td>";
            echo "<td>".$row['pendapatan_rataperbulan']."</td>";

            echo "<td><a href='edit.php?id_nelayan=".$row['id_nelayan']."'>edit</a></td>";
            echo "<td><a href='delete.php?id_nelayan=".$row['id_nelayan']."'>delete</a></td>";
            echo "</tr>";
        }
        
        
        ?>  
    </table>
    
     
</body>
</html>

