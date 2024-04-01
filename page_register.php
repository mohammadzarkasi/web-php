<html>
    <head>
        <title>Page 1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Registrasi Akun</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="handle_register.php">
                                <div class="form-group">
                                    <label for="inputUsername">Username</label>
                                    <input type="text" class="form-control" id="username" 
                                        name="username" placeholder="Masukkan username">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Masukkan email">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Masukkan password">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordConfirm">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="inputPasswordConfirm" name="password2" placeholder="Masukkan password lagi">
                                </div>
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>