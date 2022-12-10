<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/css/style.css">
    <!-- CSS for quill -->
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Best wines</title>
</head>

<!-- A MODIFIER -->

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/best-wines">Best Wines</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <li class="nav-item">
                    <a class="nav-link" href="/best-wines/login">Se connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/best-wines/logout">Se déconnecter</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
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
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Vins
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Rouges</a></li>
                        <li><a class="dropdown-item" href="#">Blancs</a></li>
                        <li><a class="dropdown-item" href="#">Champagnes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Coffrets
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nos fournisseurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs">Qui sommes nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<body>

    <?= $content ?>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>Best Wines
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <div>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Vins
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Rouges</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Blancs</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Champagne</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Coffrets
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Rouges</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Blancs</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Champagne</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Multi</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Aide
                        </h6>
                        <p>
                            <a href="faq" class="text-reset">FAQ</a>
                        </p>
                        <p>
                            <a href="mentionLegal" class="text-reset">Mentions légales</a>
                        </p>
                        <p>
                            <a href="presse" class="text-reset">Presse</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Politique de confidentialité</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://www.afpa.fr/">DWWM 22032 - Groupe 1</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="/assets/js/app.js"></script>

</body>

</html>