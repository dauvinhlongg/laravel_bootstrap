<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Navbar and Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #343a40;
        }
        .navbar {
            background-color: #fff; /* White navbar background */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }
        .navbar-brand {
            font-weight: bold;
            color: #000 !important; /* Black text color */
        }
        .nav-link, .dropdown-item {
            color: #000 !important; /* Black text color */
        }
        .nav-link:hover, .dropdown-item:hover {
            color: #ff3366 !important; /* Pink text color on hover */
        }
        .navbar-toggler-icon {
            color: #ff3366;
        }
        header {
            background-color: #fff; /* White header background */
            color: #000; /* Black text color */
            padding: 0; /* Remove padding to fit carousel */
        }
        .carousel-item {
            height: 500px; /* Adjust the height as needed */
            background-size: cover;
            background-position: center;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for text */
            padding: 1rem;
        }
        .btn-outline-black {
            color: #fff; /* White button text color */
            border-color: #fff; /* White button border color */
        }
        .btn-outline-black:hover {
            background-color: #fff; /* White background color on hover */
            color: #000; /* Black text color on hover */
        }
        .badge {
            background-color: #ff3366; /* Pink badge background color */
            color: #343a40; /* Dark badge text color */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid px-4 px-lg-5">
    <a class="navbar-brand text-bold text-uppercase text-dark" href="http://127.0.0.1:8000">Laravel</a>
    <!-- Logo kết thúc -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-4 mb-lg-2 ms-lg-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000">HOME</a>
          <li class="nav-item dropdown">
          <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownShop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdownShop">
    <li><a class="dropdown-item" href="{{ route('shop.index') }}">Tất cả sản phẩm</a></li>
    <li><a class="dropdown-item" href="{{ route('shop.category', 'Giày') }}">Giày</a></li>
    <li><a class="dropdown-item" href="{{ route('shop.category', 'Dép') }}">Dép</a></li>
  </ul>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Danh mục</a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
    <li><a class="dropdown-item" href="{{ route('categories.create') }}">Thêm danh mục</a></li>
    <li><a class="dropdown-item" href="{{ route('categories.index') }}">Chỉnh sửa danh mục</a></li>
  </ul>
</li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sản phẩm</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item" href="{{ route('products.create') }}">Thêm sản phẩm</a></li>
            <li><a class="dropdown-item" href="{{ route('products.index') }}">Chỉnh sửa sản phẩm</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @guest
          @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link btn btn-primary" href="{{ route('login') }}">
                <i class="fas fa-sign-in-alt"></i> {{ __('Đăng nhập') }}
              </a>
            </li>
          @endif
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link btn btn-success" href="{{ route('register') }}">
                <i class="fas fa-user-plus"></i> {{ __('Đăng ký') }}
              </a>
            </li>
          @endif
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user"></i> {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown3">
              <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Đăng xuất') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('user') }}">{{ __('Tài khoản của tôi') }}</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </ul>
          </li>
        @endguest
        <li class="nav-item">
          <a class="nav-link btn btn-warning" href="http://127.0.0.1:8000/cart">
            <i class="fas fa-shopping-cart"></i> <span>Giỏ hàng</span>
            <span class="badge bg-dark text-white rounded-pill">{{ $countcartshare }}</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<header class="py-2">
    <div class="container px-2 px-lg-2 my-2">  
    <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('images/1716866672.jpg');">
  </div>
                 <div class="carousel-item" style="background-image: url('images/1716865923.jpg');">
                 </div>
                <div class="carousel-item" style="background-image: url('images/1716866417.jpg');">
                   
                </div>
            </div>
            <a class="carousel-control-prev" href="#headerCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>      
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>           
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
