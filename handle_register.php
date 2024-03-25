<?php

function myPost($key)
{
    if(isset($_POST[$key]) == true)
    {
        return $_POST[$key];
    }
    return '';
}

$username = myPost('username');
$email = myPost('email');
$password = myPost('password');
$password2 = myPost('password2');
?>

<html>
    <head>
        <title>Handle Register</title>
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
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-4">Username</label>
                                <div class="col-lg-9 col-md-8">
                                    <span><?php echo $username ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-4">Email</label>
                                <div class="col-lg-9 col-md-8">
                                    <span><?php echo $email ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>