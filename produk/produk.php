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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .container{
            margin-top: 80px;
            margin-left: 320px;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <ul>
            <li><a href="../user/user.php">User</a></li>
            <li><a href="../produk/produk.php">Produk</a></li>
            <li><a href="../admin/admin.php">Admin</a></li>
    </ul>
    </div>
                <h1>Data-data Produk</h1>
                <a href="tambahproduk.php" class="btn btn-primary">Tambah Produk</a>
                
                <table>
                    <tr>
                        <th>NO</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Foto</th>
                        <th>Roles</th>
                        <th>Di apain kek</th>
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
                         <td>
                          <center> 
                              <a href="editproduk.php?id=<?= $data ["id_produk"]; ?>">Edit</a>
                               <a href="hapusproduk.php?id=<?= $data["id_produk"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a> </cente>
                          </td>                          
                    <?php $i++;?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>