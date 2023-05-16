<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caffe BDP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
</head>

<body>

    <nav class="navbar fixed-top bg-white navbar-light navbar-expand-lg bg-body-light py-2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo wk.png" width="45" height="45" class="d-inline-block align-text-top">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end --}}
    <br><br><br>
    <section>
        <div class="bg">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-6 mt-5">
                        <h5>Welcome To</h5>
                        <h1 class="my-3">Caffe Wikrama</h1>
                        <h3 class="my-3">Fresh And Delicious Food Every Day!</h3>
                        <div class="col-md-4 mb-3">
                            <a href="/product" class="btn btn-outline-dark"><b>Order Now</b></a>
                        </div>
                    </div>

                    <div class="col-4">
                        <img src="assets/img/logobdp.png" class="img-fluid" width="500" height="500"
                            class="d-inline-block align-text-top">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="row text-center text-dark">
            <h2 class="mt-4">My Menu</h2>
            <h4>Drink's</h4>
            {{-- <hr class="solid"> --}}
        </div>
        <div class="bg">
            <div class="container">
                <div class="row my-4 ms-5">
                    <div class="col-lg-4 mb-3 mt-5">
                        <div class="card"
                            style="padding-bottom:20px; width: 18rem; text-align:center; box-shadow: 0px 6px 12px 0px rgba(0, 0, 0, 0.363);">
                            <img src="assets/img/esteh1.png" class="card-img-top" alt="..."
                                style="width: 100px; margin-left: 95px;">
                            <div class="card-body text-center">
                                <h5 class="card-title">Es Teh</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 mt-5">
                        <div class="card"
                            style="padding-bottom:20px; width: 18rem; text-align:center; box-shadow: 0px 6px 12px 0px rgba(0, 0, 0, 0.363);">
                            <img src="assets/img/teh tarik.png" class="card-img-top" alt="..."
                                style="width: 190px; margin-left:20px;">
                            <div class="card-body text-center">
                                <h5 class="card-title">Teh Tarik</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 mt-5">
                        <div class="card"
                            style="padding-bottom:20px; width: 18rem; text-align:center; box-shadow: 0px 6px 12px 0px rgba(0, 0, 0, 0.363);">
                            <img src="assets/img/es jeruk.png" class="card-img-top" alt="..."
                                style="width: 90px; margin-left: 95px;">
                            <div class="card-body text-center">
                                <h5 class="card-title">Es Jeruk</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-warning w-50 text-light"><b>Buy Now</b></a>
                            </div>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row text-center text-dark">
            <h2 class="mt-3">My Menu</h2>
            <h4>Food's</h4>
            {{-- <hr class="solid"> --}}
        </div>

        <div class="bg">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-4">
                        <img src="assets/img/teriyaki.png" class="img-fluid" width="300" height="300"
                            class="d-inline-block align-text-top">
                    </div>
                    <div class="col-8">
                        <h5 class="my-3">Chicken Teriyaki</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <div class="col-md-4 mb-3">
                            <a href="#" class="btn btn-outline-dark"><b>Buy Now</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-3 footer-contact" style="text-center">
                        <h3>Cafe BDP Wikrama<span></span></h3>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-3 footer-links">
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-1 mt-1">
            <div class="copyright">
                &copy; Copyright <strong><span>Syafitri</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>
