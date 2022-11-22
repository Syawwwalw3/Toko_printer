<?php

require '../koneksi.php';

$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$foto = $_FILES["foto"]["name"];
$files = $_FILES["foto"]["tmp_name"];
$roles = $_POST["roles"];

$query = mysqli_query($conn ,"INSERT INTO produk VALUES(NULL, '$nama_produk','$harga','$stok','$foto','$roles')");

if($query){
    echo'
        <script type="text/javascript">
            alert("data berhasil ditambahkan!");
            window.location = "produk.php";
        </script>  
    ';
}else{
    echo'
    <script type="text/javascript">
        alert("data gagal ditambahkan!");
        window.location = "tambahproduk.php";
    </script>  
    ';
}

?>