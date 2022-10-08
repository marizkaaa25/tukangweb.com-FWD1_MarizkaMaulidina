<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style-login.css') ?>">
</head>

<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <img src="<?php echo base_url('assets/images/brand.png') ?>" height="40px" alt="">
                <h1>Selamat Datang!</h1>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div>
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="********">
                    </div>
                    <a href="#" class="forget float-end"><small>Lupa Password?</small></a>
                    <button onclick="location.href='<?php echo site_url('page') ?>'" class="btn-login my-4" type="submit">LOGIN</button>
                </form>
                <p class="text-center">Belum punya akun?<a class="daftar" href="#"> DAFTAR </a></p>
                <p class="copyright"><img src="<?php echo base_url('assets/icons/c-abu.svg') ?>" alt=""> 2022 by Marizka Maulidina | FWD 1</p>
            </div>
            <div class="col hide">
                <img src="<?php echo base_url('/assets/images/login.png') ?>" class="img-fluid float-end my-5 py-4 d-none d-md-block" width="50%" alt="">
            </div>
        </div>
    </div>
    <!-- script -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.js') ?>"></script>
</body>

</html>