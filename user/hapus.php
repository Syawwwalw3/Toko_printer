<?php
require '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM user WHERE id_= $id");

if(query){
    echo'
    <script type="text/javascript">
    alert("Data berhasil di dihapus!");
    window.location ="user.php";
    </script>
    ';
    }else{
       echo'
       <script type="text/javascript">
       alert("Data gagal di hapus!");
       window.location ="user.php";
       </script>
       ';
    }