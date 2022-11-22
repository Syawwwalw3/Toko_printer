<?php

require "../koneksi.php";

$user = mysqli_query($conn , "SELECT * FROM user")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styleuser.css">
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
<h1>User</h1>
<a href="tambahuser.php">Tambah data</a>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>Password</th>
        <th>Roles</th>
        <th>Apa Hayo</th>
</tr>
<?php $i = 1; ?>
<?php while($data = mysqli_fetch_array($user)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $data["nama_lengkap"]; ?></td>
        <td><?= $data["username"]; ?></td>
        <td><?= $data["password"]; ?></td>
        <td><?= $data["roles"]; ?></td>

        <td>
     <center> 
     <a href="edit.php?id=<?= $data ["id_"]; ?>">Edit</a>
     <a href="hapus.php?id=<?= $data["id_"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a> </cente>
    </td>
        
</tr>
<?php $i++;?>
<?php endwhile; ?>
</body>
</html>