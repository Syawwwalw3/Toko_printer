<?php

require 'koneksi.php';

function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }

    return $rows;
}

function edituser($data){
        global $conn;
    
        $id = htmlspecialchars($data["id_"]);    
        $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);
        $roles = htmlspecialchars($data["roles"]);
    
        $query = "UPDATE user SET 
        nama_lengkap = '$nama_lengkap',
        username = '$username',
        password = '$password',
        roles = '$roles' WHERE id_ = '$id'
        ";
    
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    
    }


    
function editproduk($data){
        global $conn;
    
        $id = htmlspecialchars($data["id_produk"]);    
        $nama_produk = htmlspecialchars($data["nama_produk"]);
        $harga = htmlspecialchars($data["harga"]);
        $stok = htmlspecialchars($data["stok"]);
        $foto = $_FILES["foto"]["name"];
        $files = $_FILES["foto"]["tmp_name"];
        $roles = htmlspecialchars($data["roles"]);
    
        if(empty($foto)){
    
        $query = "UPDATE produk SET 
        nama_produk = '$nama_produk',
        harga = '$harga',
        stok = '$stok',
        roles = '$roles' WHERE id_produk = '$id'
        ";
    
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    
        }else{
    
        $query = "UPDATE produk SET 
        nama_produk = '$nama_produk',
        harga = '$harga',
        stok = '$stok',
        foto = '$foto',
        roles = '$roles' WHERE id_produk = '$id'
        ";
    
        move_uploaded_file($files, "../asset/foto/".$foto);
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
        }
        
    }


?>

