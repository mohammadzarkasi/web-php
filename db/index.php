<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'web23';

$conn = mysqli_connect($server, $username, $password, $dbname);

// var_dump($conn);
?>
<html>
    <head>
        <title>Page 1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0 d-flex justify-content-between align-items-center">
                                Riwayat Kalori
                                <a class="btn btn-success">Tambah</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Kalori Masuk</th>
                                        <th>Kalori Keluar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>