<?php
  $koneksi = mysqli_connect("localhost","root","","index");
   $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $fullname = $_POST['fullname'];
   $query = "INSERT INTO siswa SET id='$id', username='$username', password='$password', level='$level', fullname='$fullname'";
  mysqli_query($koneksi, $query);
   header("location:index.php");
?>