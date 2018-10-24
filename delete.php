<?php
  include "koneksi.php"; 
  mysqli_connect("localhost","root","","data_siswa");
   $id = $_GET['id'];
  $qry = "DELETE FROM data WHERE id='$id'";
  mysqli_query($koneksi, $qry);
  header("location:index.php");
 ?>