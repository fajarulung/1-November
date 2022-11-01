<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tambah</title>
</head>
<body>
    <h1>Form Tambah</h1>
    <h3>Parkir Kendaraan Sepeda Motor</h3>
        <form action = "proses-tambah.php" method = "POST">
             <form>
                <fieldset>
                    <p>
                        <label for = "nama">Nama lengkap : </label>
                        <input type = "text" name = "nama" />
                    </p>
                    <p>
                        <label for = "type">Type kendaraan : </label>
                        <input type = "text" name = "type" />
                    </p>
                    <p>
                        <label for = "nomor">Nomor plat : </label>
                        <input type = "text" name = "nomor" />
                    </p>
                    <p>
                    <label for="sebelah">Parkir sebelah : </label>
                    <label><input type = "radio" name = "sebelah" value = "barat"/>Barat</label>
                    <label><input type = "radio" name = "sebelah" value = "timur"/>Timur</label>
                    <label><input type = "radio" name = "sebelah" value = "selatan"/>Selatan</label>
                    <label><input type = "radio" name = "sebelah" value = "utara"/>Utara</label>
                    </p>
                    <p>
                        <label for = "pembayarn">Pembayaran : </label>
                        <input type = "text" name = "pembayaran" />
                    </p>
                    <p>
                        <input type = "submit" value = "Kirim data" name = "simpan"/>
                    </p>
</fieldset>
</form>                  
</body>
</html>