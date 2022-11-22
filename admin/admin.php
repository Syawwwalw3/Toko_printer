<?php

require '../function.php';
$datas = query("SELECT * FROM produk")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
            <ul> 
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">contact us</a></li>
        </div>
    </div>
    <div class="sidebar">
    <ul>
            <li><a href="../user/user.php">User</a></li>
            <li><a href="../produk/produk.php">Produk</a></li>
            <li><a href="../admin/admin.php">Admin</a></li>
    </ul>
</div>
<h1>Data-data Produk</h1>
                
                <table>
                    <tr>
                        <th>NO</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Foto</th>
                        <th>Roles</th>
                    </tr>
                    
                    <?php $i = 1; ?>
                    <?php foreach($datas as $data) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data["nama_produk"] ?></td>
                            <td><?= $data["harga"] ?></td>
                            <td><?= $data["stok"] ?></td>
                            <td><img src="../asset/foto/<?= $data["foto"] ?>" width="50px"></td>
                            <td><?= $data["roles"] ?></td>                        
                    <?php $i++;?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
  </body>
   </html>