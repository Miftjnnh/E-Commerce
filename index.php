<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Project03 E-Commerce</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
        </svg>
        <a class="navbar-brand" href="#page-top">E-Commerce</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Produk">Produk</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Pemesanan">Pemesanan</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index3.php">Admin</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img src="assets/arab_beautiful_hijab.jpg" style="border-radius:100%; width: 200px;" /> <br>
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Mitfashion</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">WELLCOME TO MITFASHION!! <br> Mitfashion adalah salah satu toko fashion asal Indonesia <br> Yang mengedepankan kualitas dan desain produknya <br> Dengan Website ini, pelanggan dapat membeli berbagai macam <br> produk menarik yang sudah kami sediakan secara online <br> Happy Shopping Everyone!!</p>
        </div>
    </header>
    <!-- Produk Section-->
    <section class="page-section Produk" id="Produk">
        <div class="container">
            <!-- Produk Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Produk</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
                <br>
            </div>
            <!-- Produk Grid Items-->
            <div class="row justify-content-center">
                <!-- Produk Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="Produk-item mx-auto" data-bs-toggle="modal" data-bs-target="#ProdukModal1">
                        <div class="Produk-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="Produk-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/Produk/hijab.jpg" alt="..." />
                    </div>
                </div>
                <!-- Produk Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="Produk-item mx-auto" data-bs-toggle="modal" data-bs-target="#ProdukModal2">
                        <div class="Produk-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="Produk-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/Produk/aksesoris.jpg" alt="..." />
                    </div>
                </div>
                <!-- Produk Item 3-->

                <!-- Produk Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="Produk-item mx-auto" data-bs-toggle="modal" data-bs-target="#ProdukModal4">
                        <div class="Produk-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="Produk-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/Produk/ciput.jpg" alt="..." />
                    </div>
                </div>
                <!-- Produk Item 5-->

                <!-- Produk Item 6-->
                <div class="col-md-6 col-lg-4">
                    <div class="Produk-item mx-auto" data-bs-toggle="modal" data-bs-target="#ProdukModal6">
                        <div class="Produk-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="Produk-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/Produk/abaya.jpg" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pemesanan Section-->

    <!-- Pemesanan Section-->
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location :</h4>
                    <p class="lead mb-0">Miftahul Jannah</p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4"></h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/profile.php?id=100045172896259"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/Miftjnnh"><i class="fab fa-fw fa-github"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/miftahul-jannah-2a1829258/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://instagram.com/nmitaa.a__?igshid=ZGUzMzM3NWJiOQ=="><i class="fab fa-fw fa-instagram"></i></a>
                </div>
                <!-- Footer Pemesanan Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Admin :</h4>
                    <p class="lead mb-0">
                        Terimakasih Atas Kunjungannya!
                        Jangan lupa kembali, ya!
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Develop by &copy; Miftahul Jannah 2023</small></div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/Admin-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>