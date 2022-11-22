<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-8">
                <div class="main mt-5">
                <div class="box">
                    <h3>tambah produk</h3><br>
            
                    <form action="simpan.php" method="POST" enctype="multipart/form-data">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control"><br>
            
                        <label for="harga">harga</label>
                        <input type="text" name="harga" id="harga" class="form-control"><br>

                        <label for="stok">stok</label>
                        <input type="text" name="stok" id="stok" class="form-control"><br>
            
                        <label for="foto">foto</label>
                        <input type="file" name="foto" id="foto" class="form-control"><br>

                        <label for="roles">roles</label>
                        <select name="roles" class="form-control">
                            <option value="Dikirim">Dikirim</option>
                            <option value="Proses">Proses</option>
                        </select><br>

                        <button type="submit" name="submit" class="btn btn-dark" >kirim</button>
                    </form>
                </div>
            </div>
        </div>            
    </div>
    
</body>
</html>