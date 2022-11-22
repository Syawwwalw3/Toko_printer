<?php

require '../koneksi.php';

$nama_lengkap= $_POST["nama_lengkap"];
$username = $_POST["username"];
$password= $_POST["password"];
$roles= $_POST["roles"];


$query = mysqli_query($conn, "INSERT INTO user VALUES(NULL ,'$nama_lengkap','$username','$password','$roles')");

 if(query){
 echo'
 <script type="text/javascript">
 alert("Data berhasil di tambah!");
 window.location ="user.php";
 </script>
 ';
 }else{
    echo'
    <script type="text/javascript">
    alert("Data gagal di tambah!");
    window.location ="tambahuser.php";
    </script>
    ';
 }