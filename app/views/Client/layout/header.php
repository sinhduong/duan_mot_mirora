<?php ob_start() ?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/mirora/mirora/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2023 15:56:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>Mirora - Watch & Luxury Store Bootstrap 5 Template</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Elegent Icon CSS -->
    <link rel="stylesheet" href="assets/css/elegent-icons.css">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php
    //  echo $_SESSION['id'];
    // echo $_SESSION['name'];
    // echo $_SESSION['vai_tro'];
    ?>

    <!-- Main Wrapper Start -->
    <div class="wrapper bg--shaft">
        <!-- Header Area Start -->
        <header class="header headery-style-1">
            <div class="header-top header-top-1">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row">
                            <ul class="social social-round mr--20">
                                <li class="social__item">
                                    <a href="" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://www.facebook.com/duong.sinh.5661" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://www.instagram.com/duong.sinh.56614/" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="header-text">Miễn phí vận chuyển trên tất cả các đơn đặt hàng trong nước<span>“Watches2023”</span></p>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-top-nav d-flex justify-content-lg-end justify-content-center">
                                <div class="language-selector header-top-nav__item">
                                    <div class="dropdown header-top__dropdown">
                                        <a class="dropdown-toggle" id="languageID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            EN-VN
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="languageID">
                                            <a class="dropdown-item" href="#"><img src="assets/img/header/1.jpg" alt="English"> English</a>
                                            <a class="dropdown-item" href="#"><img src="assets/img/header/2.jpg" alt="Français"> Việt Nam</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="currency-selector header-top-nav__item">
                                    <div class="dropdown header-top__dropdown">

                                        <a class="dropdown-toggle" id="currencyID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            USD
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="currencyID">
                                            <a class="dropdown-item" href="#">&euro; VND</a>
                                            <a class="dropdown-item" href="#">&pound; BTC</a>
                                            <a class="dropdown-item" href="#">&dollar; PI NETWORK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-info header-top-nav__item">
                                    <div class="dropdown header-top__dropdown">
                                        <a class="dropdown-toggle" id="userID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Tài khoản
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="userID">
                                            <?php
                                            // Kiểm tra xem session 'id' có tồn tại và không rỗng hay không
                                            if (!isset($_SESSION['taikhoan'])) {
                                                // Nếu không có session 'id', người dùng là khách hàng
                                            ?>
                                                <a class="dropdown-item" href="index.php?redirect=dangky">ĐĂNG KÝ</a>
                                                <a class="dropdown-item" href="index.php?redirect=dangnhap">ĐĂNG NHẬP</a>
                                               
                                                <?php
                                            } else {
                                                // Nếu có session 'id', kiểm tra vai trò của người dùng
                                                if (($_SESSION['taikhoan']['vai_tro']) == 1 ) {
                                                    // Nếu vai trò là 1 (quản trị viên), hiển thị nút ADMIN
                                                ?>
                                                    <a class="dropdown-item" href="index.php?redirect=dangxuat">ĐĂNG XUẤT</a>
                                                    <a class="dropdown-item" href="index.php?redirect=donhang">Lịch sử đơn hàng</a>
                                                    
                                                    <a class="dropdown-item" href="../../duanmot/app/views/admin/index.php">ADMIN</a>
                                                <?php
                                                } else {
                                                    // Ngược lại, nếu vai trò không phải là 1, chỉ hiển thị đăng xuất
                                                ?>
                                                      <a class="dropdown-item" href="index.php?redirect=dangxuat">ĐĂNG XUẤT</a>
                                                    <a class="dropdown-item" href="index.php?redirect=donhang">Lịch sử đơn hàng</a>
                                                    
                                                <?php
                                                }
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-top-1">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5 col-sm-6 order-lg-1 order-2">
                            <div class="contact-info">
                                <img src="assets/img/icons/icon_phone.png" alt="Phone Icon">
                                <p>Call<br> Free Support: 0865642497</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 order-lg-2 order-1 text-center">
                            <a href="index.php" class="logo-box mb-md--30">
                                <img src="assets/img/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-7 col-sm-6 order-lg-3 order-3">
                            <div class="header-toolbar">
                                <div class="search-form-wrapper search-hide">
                                    <form action="index.php?redirect=timkiem" class="search-form" method="POST">
                                        <input type="text" name="search_input" id="search" class="search-form__input" placeholder="Tìm kiếm...">
                                        <button type="submit" name="search_submit" class="search-form__submit">
                                            <i class="icon_search"></i>
                                        </button>
                                    </form>
                                </div>
                                <ul class="header-toolbar-icons">
                                    <li class="search-box">
                                        <a href="#" class="bordered-icon search-btn" aria-expanded="false"><i class="icon_search"></i></a>
                                    </li>
                                    <!-- <a href="" class="mini-cart-icon"></a> -->
                                    <li class="mini-cart-icon">
                                    <div class="mini-cart mini-cart--1">
                                        <a href="?redirect=giohang" class="mini-cart__dropdown-toggle bordered-icon" id="cartDropdown">
                                            <i class="icon_cart_alt mini-cart__icon"></i>
                                            <span style="font-size: 20px" class="header-action-num"><?php (isset($_SESSION['mycart'])) ? $mess = count($_SESSION['mycart']) : $mess = 0; echo $mess;?></span>
                                            <span class="mini-cart__ammount">
                                                <i class="fa fa-angle-down"></i>
                                            </span>
                                        </a>
                                        <div class="mini-cart__dropdown-menu">
                                            <div class="mini-cart__content" id="miniCart">
                                                
                                                <div class="mini-cart__btn">
                                                    <a href="index.php?redirect=giohang" class="btn btn-fullwidth btn-style-1">Xem giỏ hàng</a>
                                                    <a href="index.php?redirect=donhang" class="btn btn-fullwidth btn-style-1">Kiểm tra</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-top-1 position-relative navigation-wrap fixed-header">
                <div class="container position-static">
                    <div class="row">
                        <div class="col-12 position-static text-center">
                            <nav class="main-navigation">
                                <ul class="mainmenu">
                                    <li class="mainmenu__item active ">
                                        <a href="index.php" class="mainmenu__link">Trang chủ</a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="index.php?redirect=shop" class="mainmenu__link">Shop</a>
                                    </li>
                                    <li class="mainmenu__item  menu-item-has-children has-children">
                                        <a href="index.php" class="mainmenu__link">Mặt hàng</a>
                                        <ul class="sub-menu">
                                           
                                                <li><a href="index.php?redirect=spbanchay"> Sản phẩm bán chạy</a></li>
                                                <li><a href="index.php?redirect=spdat"> Sản phẩm đắt</a></li>
                                                <li><a href="index.php?redirect=spbanchay"> Sản phẩm hạt dẻ</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item  menu-item-has-children has-children">
                                        <a href="index.php" class="mainmenu__link">Danh mục</a>
                                        <ul class="sub-menu">
                                            <?php
                                            $danhmuc = alldanhmuc();
                                            foreach ($danhmuc as $row) :
                                                extract($row); ?>
                                                <li><a href="index.php?redirect=sptheodm&id=<?= $id ?>"><?= $name ?></a></li>
                                            <?php
                                            endforeach;
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="index.php?redirect=vechungtoi" class="mainmenu__link">Về Chúng Tôi</a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="index.php?redirect=blog" class="mainmenu__link">Blog</a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="index.php?redirect=lienhe" class="mainmenu__link">Liên hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End -->


        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <!-- Slider area Start -->

            <div class="slider-area">
                <div class="homepage-slider">
                    <!-- Single Slide Start -->
                    <div class="single-slider content-v-center" style="background-image: url(assets/img/slider/slider1-mirora1-1920x634.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h5 data-animation="rollIn" data-duration=".8s" data-delay=".5s">Ưu đãi độc quyền -20% giảm trong tuần này</h5>
                                        <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">H-Vault Classico</h1>
                                        <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">Đồng hồ H -Vault rất giống những chiếc xe cơ bắp cổ điển của Hàn Quốc - mong đợi cho phần của Hàn Quốc.</p>
                                        <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">Chỉ từ<strong>$1.499.00</strong></p>
                                        <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s" data-delay=".3s">
                                            <a href="" class="btn btn-bordered btn-style-1">Mua Ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slide End -->

                    <!-- Single Slide Start -->
                    <div class="single-slider content-v-center" style="background-image: url(assets/img/slider/slider2-mirora1-1920x634.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h5 data-animation="rollIn" data-duration=".8s" data-delay=".5s">Ưu đãi độc quyền -20% giảm trong tuần này</h5>
                                        <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">H-Vault Classico</h1>
                                        <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">Đồng hồ H -Vault rất giống những chiếc xe cơ bắp cổ điển của Hàn Quốc - mong đợi cho phần của Hàn Quốc.</p>
                                        <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">Chỉ Từ <strong>$2.499.00</strong></p>
                                        <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s" data-delay=".3s">
                                            <a href="" class="btn btn-bordered btn-style-1">Mua ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Slide Start -->
                    <div class="single-slider content-v-center" style="background-image: url(assets/img/slider/slider2-mirora1-1920x634.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h5 data-animation="rollIn" data-duration=".3s" data-delay=".5s">Ưu đãi độc quyền -20% giảm trong tuần này</h5>
                                        <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".3s">H-Vault Classico</h1>
                                        <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".3s">Đồng hồ H -Vault rất giống những chiếc xe cơ bắp cổ điển của Hàn Quốc - mong đợi cho phần của Hàn Quốc.</p>
                                        <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".3s">Chỉ Từ <strong>$3.499.00</strong></p>
                                        <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s" data-delay=".3s">
                                            <a href="" class="btn btn-bordered btn-style-1">mua ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slide End -->
                </div>
            </div>

            <!-- Slider area End -->