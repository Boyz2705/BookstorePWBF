<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>BetterBooks</title>
		<link rel="icon" type="image/x-icon" href="https://spesialis1.ikf.fk.unair.ac.id/wp-content/uploads/2019/02/logo-unair.png" />
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">
	    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="css/vendor.css">
	    <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/templatemo.css">
        <link rel="stylesheet" href="assets/css/custom.css">

        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">

        <!-- Slick -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

		<!-- script-->
		<script src="js/modernizr.js"></script>

	</head>

    <body>
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="w-100 pt-1 mb-5 text-right">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="get" class="modal-content modal-body border-0 p-0">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                        <button type="submit" class="input-group-text bg-success text-light">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    <!-- <div id="entire-wrapper"> -->
    @include('partials.header')
    <!--header-wrap-->

    <!-- Open Content -->
    <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="images/tab-item1.jpg" alt="Card image cap" id="product-detail">
                            </div>
                            <div class="row">
                            </div>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2">Active Wear</h1>
                                <p class="h3 py-2">$40.00</p>
                                <p class="py-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <span class="list-inline-item text-dark">Rating 4.5 | 136 Comments</span>
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Writer:</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong>Adam Silber</strong></p>
                                    </li>
                                </ul>

                                <h6>Description:</h6>
                                <p>Fotografi potret adalah tentang menangkap esensi, kepribadian, identitas dan sikap seseorang dengan memanfaatkan latar belakang, pencahayaan dan berpose. Meskipun definisi ini mungkin terdengar sederhana, fotografi potret dapat menjadi salah satu bentuk fotografi yang paling menantang untuk dikuasai. Tujuannya adalah untuk mengambil foto yang tampak alami dan siap untuk memungkinkan kepribadian subjek terlihat.</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                    </li>
                                    <li class="list-inline-item">
                                    </li>
                                </ul>

                                <h6>Specification:</h6>
                                <ul class="list-unstyled pb-3">
                                    <li>Lorem ipsum dolor sit</li>
                                    <li>Amet, consectetur</li>
                                    <li>Adipiscing elit,set</li>
                                    <li>Duis aute irure</li>
                                    <li>Ut enim ad minim</li>
                                    <li>Dolore magna aliqua</li>
                                    <li>Excepteur sint</li>
                                </ul>

                                <form action="" method="GET">
                                    <input type="hidden" name="product-title" value="Activewear">
                                    <div class="row">
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                            </ul>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <a href="/form"><button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button></a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Content -->

        <!-- Start Script -->
        <script src="assets/js/jquery-1.11.0.min.js"></script>
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/templatemo.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/slideNav.min.js"></script>
        <script src="js/slideNav.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/script.js"></script>
        <!-- End Script -->
    </body>
</html>	