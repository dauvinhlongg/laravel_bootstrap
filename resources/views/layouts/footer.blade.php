<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        footer {
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            color: #fff;
            padding: 2rem 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.5);
        }
        footer a {
            color: #ffcc00;
            text-decoration: none;
        }
        footer a:hover {
            color: #ff9900;
        }
        footer .container {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        footer h6 {
            font-weight: bold;
            margin-bottom: 1rem;
            border-bottom: 2px solid #ffcc00;
            display: inline-block;
        }
        footer .list-unstyled p,
        footer .list-unstyled a {
            margin-bottom: 0.5rem;
        }
        footer .border-top {
            border-top: 1px solid #666;
        }
        footer .fab {
            margin-right: 1rem;
            transition: transform 0.2s;
        }
        footer .fab:hover {
            transform: scale(1.2);
        }
        .dropdown-toggle::after {
            margin-left: 0.5rem;
        }
        .dropdown-menu {
            background-color: #2c3e50;
            border: none;
        }
        .dropdown-menu a {
            color: #fff;
        }
        .dropdown-menu a:hover {
            background-color: #3b587a;
        }
        .dropdown-divider {
            border-top: 1px solid #777;
        }
    </style>
</head>
<body>

<footer class="text-center text-lg-start text-muted mt-3">
    <!-- Section: Links -->
    <section class="">
        <div class="container text-center text-md-start pt-4 pb-4 text-white">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-12 col-lg-3 col-sm-12 mb-2">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-2">
                        VĨNH LONG
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-2">
                        Danh Mục
                    </h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="nav-link" href="http://127.0.0.1:8000/">Trang Chủ</a></li>
                        <li><a class="nav-link" href="#">Dự án</a></li>
                        <li><a class="nav-link" href="#">Tuyển Dụng</a></li>
                        <li><a class="nav-link" href="#">Liên Hệ</a></li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-3">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-2">
                        Liên hệ
                    </h6>
                    <ul class="list-unstyled mb-4">
                        <li><p>Gmail: mailcuatau156203@gmail.com</p></li>
                        <li><p>SĐT: 0932308068</p></li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-2">
                        Theo Dõi
                    </h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="nav-link" href="https://www.facebook.com/profile.php?id=100039475727533&locale=vi_VN"><i class="fab fa-facebook me-1"></i> Facebook</a></li>
                        <li><a class="nav-link" href="https://github.com/dauvinhlongg"><i class="fab fa-github me-1"></i> Github</a></li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links -->

    <!-- Section: Payment and Language -->
    <div class="border-top border-secondary">
        <div class="container">
            <div class="d-flex justify-content-between py-4">
                <!-- Payment -->
                <div>
                    <i class="fab fa-lg fa-cc-visa"></i>
                    <i class="fab fa-lg fa-cc-amex"></i>
                    <i class="fab fa-lg fa-cc-mastercard"></i>
                    <i class="fab fa-lg fa-cc-paypal"></i>
                </div>
                <!-- Payment -->

                <!-- Language selector -->
                <div class="dropdown dropup">
                    <a class="dropdown-toggle text-white" href="#" id="Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i> English</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
                        <li><a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i> English</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#"><i class="flag-vietnam flag"></i> Tiếng Việt</a></li>
                        <!-- Add more languages as needed -->
                    </ul>
                </div>
                <!-- Language selector -->
            </div>
        </div>
    </div>
    <!-- Section: Payment and Language -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
