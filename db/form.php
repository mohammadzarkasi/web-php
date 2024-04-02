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
                                Tambah Riwayat Kalori
                            </h4>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="handle_form.php">
                                <div class="form-group row mb-2">
                                    <label class="col-xl-3">Tanggal</label>
                                    <div class="col-xl-6">
                                        <input name="tanggal" class="form-control" type="date" value="<?= date('Y-m-d') ?>" />
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-xl-3">Berat Badan</label>
                                    <div class="col-xl-6">
                                        <input name="berat" class="form-control" type="number" value="80" />
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-xl-3">Kalori</label>
                                    <div class="col-xl-6">
                                        <input name="kalori" class="form-control" type="number" value="4000" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>