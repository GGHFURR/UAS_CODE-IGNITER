<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container-xxl py-2 bg-primary ">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-6 offset-md-3 text-center">
                    <div class="card text-center animated zoomIn">
                        <div class="card-body p-lg-5 ">
                            <form action="/login/auth" method="POST">
                                <p class="login-text text-dark mt-3" style="font-size: 2rem; font-weight: 800;">Login
                                </p>
                                <?php if (session()->getFlashdata('msg')) : ?>
                                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                <?php endif; ?>
                                <div class="input-group mt-3">
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="">
                                </div>
                                <div class="input-group mt-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="">
                                </div>
                                <button name="submit" class="btn btn-dark text-center my-3">Login</button>

                                <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>