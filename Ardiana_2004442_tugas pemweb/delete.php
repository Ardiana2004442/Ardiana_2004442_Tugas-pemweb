<?php    
   include("koneksi.php");

   $id_nelayan = $_GET['id_nelayan'];

   $query = "delete from formulirpermohonan where id_nelayan = $id_nelayan";
   
   if(mysqli_query($koneksi, $query)){
       header("Location: index.php");
   }else{
       header("Location: edit.php?id_nelayan=$id_nelayan");
   }

?>