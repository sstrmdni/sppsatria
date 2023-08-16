<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Password / Petugas - Aplikasi Pembayaran SPP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h4 class="text-center">Lupa Password</h4>
                    <div class="card-body">
                    <div class="from-group mb-2">
                    <form method="post" action="proses-lupa.php">
                        <div class="form-group mb-2">
                            <label>Username</label>
                                <input type="text" name="username" class="form-control" required>
                        </div>
                            <div class="form-group mb-2">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label>Nama Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control" required>
                            </div>
                    <div class="form-group mb-2">
                    </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                            <a href="index2.php" class="btn btn-warning">KEMBALI</a>
                        </div>
                    </div>
                </div>
            </div>
