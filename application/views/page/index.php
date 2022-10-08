<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <title>tukangweb.com|FWD1_MarizkaMaulidina</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow sticky-top">
        <div class="container">
            <a class="navbar-brand brand" href="#"><img src="<?php echo base_url() ?>assets/images/brand.png" height="40px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 poppins">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#catalog">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About US</a>
                    </li>
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-daftar poppins me-md-2" type="button">Daftar</button>
                    <button onclick="location.href='<?php echo site_url('login') ?>'" class="btn btn-login poppins bg-hijau" type="button">Login</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- jumbotron -->
    <section class="container my-5 py-3">
        <img src="<?php echo base_url(); ?>assets/images/jumbotron.png" style="z-index: 1 ;position: relative;" class="img-fluid float-end my-3 d-none d-md-block" width="60%" alt="jumbotron">
        <div class="float-start jbt">
            <h2 class="nunito">Jasa Pembuatan Website</h2>
            <h1 class="nunito bg-white">Website Anda Siap Mendunia</h1>
            <h3 class="nunito">Hanya dalam 36 jam</h3>
            <button class="btn-pesan nunito my-5" type="button">Pesan Sekarang<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                </svg></button>
        </div>
    </section>
    <!-- end jumbotron -->

    <!-- miliki -->
    <section class="container-fluid bg-abu hero-2">
        <div class="container">
            <h1 class="poppins">Miliki Website Anda Sendiri</h1>
            <div class="row">
                <div class="col-4">
                    <img src="<?php echo base_url(); ?>assets/images/web1.png" width="300px" alt="">
                </div>
                <div class="col-8">
                    <p class="nunito">Miliki website untuk membangun portofolio maupun website untuk meningkatkan, mengelola dan mempromosikan bisnis anda</p>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn-pesan nunito" type="button">Pesan Sekarang<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                    </svg></button>
            </div>
        </div>
    </section>
    <!-- end miliki -->

    <!-- mengapa -->
    <section class="container-fluid bg-cyan">
        <div class="row align-items-center">
            <div class="col-4">
                <h2 class="poppins">Mengapa tukangweb.com adalah Pilihan Terbaik Untuk Anda</h2>
                <a href="#" class="nunito link-pesan">Pesan Sekarang<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                    </svg></a>
            </div>
            <div class="col-8 bg-cyanmuda py-3">
                <div class="row row-cols-1 row-cols-md-2 g-4 reason">
                    <!-- profesional -->
                    <div class="col">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-3 text-center m-auto">
                                    <img src="<?php echo base_url(); ?>assets/icons/Guarantee.svg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <p class="card-title poppins"><b>Professional</b></p>
                                        <p class="card-text poppins">Dikerjakan oleh tim yang ahli di bidangnya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cepat -->
                    <div class="col">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-3 text-center m-auto">
                                    <img src="<?php echo base_url(); ?>assets/icons/Clock.svg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <p class="card-title poppins"><b>Pengerjaan Cepat</b></p>
                                        <p class="card-text poppins">Proses pengerjaan lebih cepat dan tanggap.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- aman -->
                    <div class="col">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-3 text-center m-auto">
                                    <img src="<?php echo base_url(); ?>assets/icons/Public Safety.svg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <p class="card-title poppins"><b>Aman & Terjamin</b></p>
                                        <p class="card-text poppins">Kerahasiaan data dan asset akan terjaga</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- berpengalaman -->
                    <div class="col">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-3 text-center m-auto">
                                    <img src="<?php echo base_url(); ?>assets/icons/Thumbs Up.svg" class="img-fluid rounded-start px-1" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <p class="card-title poppins"><b>Berpengalaman</b></p>
                                        <p class="card-text poppins">Telah melayani berbagai klien di berbagai bidang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end mengapa -->

    <!-- catalog -->
    <section class="container-fluid bg-abu py-5" id="catalog">
        <h1 class="poppins text-hijau">Buat Website Murah dan Berkualitas</h1>
        <p class="poppins text-center">Miliki Website Anda Sendiri hanya mulai dari Rp. XXX.XXX,-</p>
        <div class="container bg-white">
            <div class="container">
                <div class="row row-cols-2 p-5">
                    <!-- edu -->
                    <div class="col-6">
                        <h3 class="poppins">
                            Website Pendidikan
                        </h3>
                        <ul>
                            <li class="nunito">Hosting & Domain 1 tahun</li>
                            <li class="nunito">Responsive desain</li>
                            <li class="nunito">News & Blog</li>
                            <li class="nunito">Gallery foto & video</li>
                            <li class="nunito">Integrasi Google Maps, dll</li>
                        </ul>
                        <a href="#" class="poppins detail">Detail -></a>
                    </div>
                    <div class="col-6 text-center m-auto">
                        <img src="<?php echo base_url(); ?>assets/images/lp_edu.png" width="50%" alt="logo edu">
                    </div>
                    <!-- bisnis -->
                    <div class="col-6 text-center m-auto">
                        <img src="<?php echo base_url(); ?>assets/images/lp_business.png" width="50%" alt="logo bisnis">
                    </div>
                    <div class="col-6">
                        <h3 class="poppins">
                            Website Business
                        </h3>
                        <ul>
                            <li class="nunito">Hosting & Domain 1 tahun</li>
                            <li class="nunito">Responsive desain</li>
                            <li class="nunito">News & Blog</li>
                            <li class="nunito">Gallery foto & video</li>
                            <li class="nunito">Integrasi Google Maps, dll</li>
                        </ul>
                        <a href="#" class="poppins detail">Detail -></a>
                    </div>
                    <!-- bisnis -->
                    <div class="col-6">
                        <h3 class="poppins">
                            Website Custom
                        </h3>
                        <ul>
                            <li class="nunito">Hosting & Domain 1 tahun</li>
                            <li class="nunito">Responsive desain</li>
                            <li class="nunito">News & Blog</li>
                            <li class="nunito">Gallery foto & video</li>
                            <li class="nunito">Integrasi Google Maps, dll</li>
                        </ul>
                        <a href="#" class="poppins detail">Detail -></a>
                    </div>
                    <div class="col-6 text-center m-auto">
                        <img src="<?php echo base_url(); ?>assets/images/lp_custom.png" width="50%" alt="logo edu">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center py-5">
            <button class="btn-pesan nunito" type="button">Pesan Sekarang<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                </svg></button>
        </div>
    </section>
    <!-- end catalog -->

    <!-- klien -->
    <section class="container py-5">
        <h1 class="poppins text-start m-auto">Klien Kami</h1>
        <p class="poppins m-auto">Beberapa klien yang telah mempercayakan website mereka pada kami.</p>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators m-auto">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="<?php echo base_url(); ?>assets/images/klien1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo base_url(); ?>assets/images/kl2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/images/kl3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="d-flex justify-content-center my-5">
            <button class="btn-pesan nunito" type="button">Pesan Sekarang<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                </svg></button>
        </div>
    </section>
    <!-- end klien -->

    <!-- footer -->
    <footer class="bg-dark bg-opacity-75 text-white pt-5 pb-2" id="about">
        <div class="container">
            <h2 class="logo-brand">tukangweb.com</h2>
            <h5>Landing page ini dibuat untuk memenuhi tugas Studi Independen Bersertifikat Full Stack Web Developer PT. Arkatama Multi Solusindo. Pada penerapannya, bagian ini dapat diisi ‘About US’ yang berisi deskripsi terkait jasa web ini, informasi pengelolaan atau pemilik ataupun detail-detail lainnya. </h5>
            <h3 class="poppins">Contact US</h3>
            <div class="row row-cols-3">
                <div class="col-3 align-items-center">
                    <div class="row row-cols-2">
                        <div class="col-3 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/fb.svg" alt=""></div>
                        <div class="col-9 m-auto contact">Marizka Maulidina</div>
                        <div class="col-3 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/ig.svg" alt=""></div>
                        <div class="col-9 m-auto contact">@marizkaaa25</div>
                    </div>
                </div>
                <div class="col-3 align-items-center">
                    <div class="row row-cols-2">
                        <div class="col-3 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/wa.svg" alt=""></div>
                        <div class="col-9 m-auto contact">+62822 2933 7599</div>
                        <div class="col-3 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/tw.svg" alt=""></div>
                        <div class="col-9 m-auto contact">@marizkaaa25</div>
                    </div>
                </div>
                <div class="col-6 align-items-center">
                    <div class="row row-cols-2">
                        <div class="col-2 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/mail.svg" alt=""></div>
                        <div class="col-10 m-auto contact">202410103009@mail.unej.ac.id</div>
                        <div class="col-2 m-auto icon-contact py-2"><img src="<?php echo base_url(); ?>assets/icons/home.svg" alt=""></div>
                        <div class="col-10 m-auto contact">Desa Balung, Kec. Kendit, Kab. Situbondo, Jawa Timur</div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="poppins text-center"><img src="<?php echo base_url(); ?>assets/icons/c.svg" alt=""> 2022 Marizka Maulidina | FWD 1</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- script -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.js"></script>
</body>

</html>