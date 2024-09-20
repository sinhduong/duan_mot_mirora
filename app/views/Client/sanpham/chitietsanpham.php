<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
    .hienthibinhluan {
        max-height: 420px;
        /* Điều chỉnh chiều cao của vùng hiển thị */
        overflow-y: auto;
        /* Hiển thị thanh cuộn khi nội dung vượt quá chiều cao */
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        position: relative;
    }

    .load-more {
        text-align: center;
        padding: 10px;
        cursor: pointer;
        background-color: #f1f1f1;
        border-radius: 5px;
        margin-top: 10px;
    }

    .hienthibinhluan .mot-binhluan span {
        display: inline-block;
        margin-bottom: 5px;
        /* Thêm margin để tạo khoảng cách giữa các phần tử */
    }

    .col-lg-6 {
        width: 50%;
        box-sizing: border-box;
        /* To include padding and border in the width */
    }

    .vietbinhluan,
    .hienthibinhluan {
        padding: 10px;
        width: 50%;
        /* Add padding for better spacing */
    }

    .mot-binhluan {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
    }

    /*  */
    .form-bl {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f1f1;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
    }

    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="number"] {
        width: 50px;
        text-align: center;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .add_cart {
        padding: 0px;
        width: 80px;
        background-color: #E5E5E5;
    }


    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Add more styles as needed */


    /* Add more styles as needed */

    /* Add more styles as needed */
    </style>
</head>

</html>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Chi tiết sản phẩm</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?redirect=shop">Cửa hàng</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="single-products-area section-padding section-md-padding">
        <div class="container">
            <!-- Single Product Start -->

            <section class="mirora-single-product pb--80 pb-md--60">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Tab Content Start -->
                        <div class="tab-content product-details-thumb-large" id="myTabContent-3">
                            <div class="tab-pane fade show active" id="product-large-one">
                                <div class="product-details-img ">
                                    <!-- <a class="popup-btn" href="public/images/<?= $load_one_sp['hinh_anh'] ?>">  -->

                                        <img src="public/images/<?= $load_one_sp['hinh_anh']  ?>" alt="product">
                                    </a>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="product-large-two">
                                <?php var_dump($load_all_sp)?>
                                <div class="product-details-img ">
                                    <a class="popup-btn" href="#">
                                        <img src="#" alt="product">
                                    </a>
                                </div>
                            </div>

                        </div>
                       
                        <div class="product-details-thumbnail">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content">
                            <div class="product-details-top">
                                <h2 class="product-details-name"><?= $load_one_sp['name']  ?></h2>
                                <div class="ratings-wrap">
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>
                                        <a class="review-btn" href="#singleProductTab">Đánh giá</a>
                                    </span>
                                </div>
                                <div class="ratings-wrap">
                                    <div class="ratings">
                                        <p>Giá giảm: <?= $load_one_sp['gia_giam']  ?></p>
                                        <del>Giá sản phẩm: <?= $load_one_sp['gia']  ?></del>
                                    </div>

                                </div>
                                <div class="ratings-wrap">
                                    <div class="ratings">
                                        <p>Mô tả: <?= $load_one_sp['mo_ta']  ?></p>
                                    </div>

                                </div>


                            </div>

                            <div class="product-details-bottom">
                                <div class="product-details-action-wrapper mb--20">
                                    <div class="product-details-action-top d-flex align-items-center mb--20">
                                    <?php
                                        if (is_array($load_one_sp)) {
                                            extract($load_one_sp);
                                        }
                                        ?>
                                    <form style="margin-right: 100px" action="index.php?redirect=themgiohang" method="post">
                                        <div class="quantity">
                                            <span>SL: </span>
                                            <input type="number" style="height: 50px" name="soluong" min="1" value="1">
                                        </div>
                                        
                                            <input type="hidden" name="masp" value="<?= $id ?>">
                                            <input type="hidden" name="hinhanh" value="<?= $hinh_anh ?>">
                                            <input type="hidden" name="tensp" value="<?= $name ?>">
                                            <input type="hidden" name="giagiam" value="<?= $gia_giam ?>">
                                            <input type="hidden" name="gia" value="<?= $gia ?>">
                                            
                                            <button type="submit" name="addtocart" class="btn btn-medium btn-style-2 add-to-cart">Thêm vào giỏ hàng </button>
                                    </form>
                                    </div>

                                    <div class="social-share">
                                        <a href="https://facebook.com/" target="_blank" rel="noopener noreferrer"
                                            class="facebook share-button">
                                            <i class="fa fa-facebook"></i>
                                            <span>Like</span>
                                        </a>
                                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"
                                            class="twitter share-button">
                                            <i class="fa fa-twitter"></i>
                                            <span>Tweet</span>
                                        </a>
                                        <a href="#" class="share share-button">
                                            <i class="fa fa-plus-square"></i>
                                            <span>Share</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
            </section>

            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="page-title">Bình luận </h1>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="display: flex;">
                <div class="vietbinhluan">
                    <?php
                    // Kiểm tra xem người dùng đã đăng nhập hay chưa bằng cách kiểm tra có tồn tại id hay không
                    if (isset($_SESSION['taikhoan']) && !empty($_SESSION['taikhoan'])) {
                    ?>
                    <form class="form-bl" action="index.php?redirect=guibinhluan&id=<?= $_GET['id'] ?>" method="post">
                        <input type="hidden" name="id_san_pham" value="<?= $id ?>"> <!-- Giá trị ID sản phẩm -->
                        <input type="hidden" name="id_tai_khoan" value="<?= $_SESSION['taikhoan']['id'] ?>">
                        <!-- Giá trị ID tài khoản -->
                        <input type="text" name="ngay_binh_luan" value="<?php $ngay_binh_luan = date('Y-m-d');
                                                                            echo $ngay_binh_luan ?>" hidden>
                        <label for="noi_dung">Nội dung bình luận:</label><br>
                        <textarea id="noi_dung" name="noi_dung_binh_luan" rows="4" cols="50"
                            placeholder="Viết bình luận..."></textarea><br>
                        <label for="danh_gia">Đánh giá:</label><br>
                        <select id="danh_gia" name="danh_gia">
                            <option value="5">5 sao</option>
                            <option value="4">4 sao</option>
                            <option value="3">3 sao</option>
                            <option value="2">2 sao</option>
                            <option value="1">1 sao</option>
                        </select><br><br>

                        <input type="submit" value="Gửi bình luận" name="guibinhluan">
                    </form>
                </div>
                <?php } else { ?>
                <a href="index.php?redirect=dangnhap">Vui lòng đăng nhập để bình luận</a>

                <?php } ?>

                <div class="hienthibinhluan col-lg-6">
                    <h4>Hiện thị bình luận</h4>
                    <?php
                            if(isset($_GET['id'])){
                                $binhluan = load_one_binhluan($_GET['id']);
                               
                            }
                            foreach ($binhluan as $row) :
                                extract($row);
                            
                        ?>
                    <tr>
                        <div class="mot-binhluan">
                        <img src="public/images/<?= $avt ?>" alt="" style="width: 50px; height: 50px; border-radius: 50px;">
                            <span>Tên tài khoản:</span>
                            <span class="info" id="id_tai_khoan"> <?= $name ?> </span><br>
                            <span>Ngày bình luận:</span>
                            <span class="info" id="ngay_binh_luan"> <?= $ngay_binh_luan ?> </span><br>
                            <span>Nội dung bình luận:</span>
                            <span class="info" id="noi_dung_binh_luan"> <?= $noi_dung_binh_luan ?> </span><br>
                            <span>Đánh giá (số sao):</span>
                            <span class="info" id="danh_gia"> <?= $danh_gia ?> </span> <br>
                        </div>
                    </tr>
                    <?php
                        endforeach;
                        ?>

                    
                </div>
            </div>

        </div>
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Sản phẩm tương tự </h1>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">

                                <div class="tab-content product-tab__content" id="product-tabContent">

                                    <div class="product-carousel js-product-carousel">
                                        <?php
                                        $i = 0;
                                        $sanpham = all_sanpham_giam();

                                        foreach ($sanpham as $row) :
                                            extract($row);
                                        ?>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="public/images/<?= $hinh_anh ?>" alt="Product"
                                                        class="primary-image" />
                                                    <img src="public/images/<?= $hinh_anh ?>" alt="Product"
                                                        class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            -20%
                                                        </span>
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#productModal"
                                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Xem
                                                            chi tiết</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span>Cartier</span>
                                                    <h4><a
                                                            href="index.php?redirect=chitietsanpham&id=<?= $id ?>"><?= $name ?></a>
                                                    </h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$<?= $gia_giam ?></span>
                                                        <span class="product-price-old">
                                                            <span class="money">$<?= $gia ?></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                        <?= $mo_ta ?>
                                                    </p>
                                                    <form action="index.php?redirect=giohang " method="post">
                                                        <div class="product-action">
                                                            <a class="same-action" href="" title="wishlist">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                            <input class="add_cart cart-item action-cart" type="submit"
                                                                name="addcart" value="Thêm Giỏ">
                                                            <input type="hidden" name="hinhanh"
                                                                value="<?= $hinh_anh ?>">
                                                            <input type="hidden" name="tensp" value="<?= $name ?>">
                                                            <input type="hidden" name="giagiam"
                                                                value="<?= $gia_giam ?>">
                                                            <input type="hidden" name="gia" value="<?= $gia ?>">
                                                            <input type="hidden" name="soluong" min="1" max="10"
                                                                value="1">
                                                            <a class="same-action compare-mrg" data-bs-toggle="modal"
                                                                data-bs-target="#productModal" href="compare.html">
                                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $i++;
                                        endforeach;
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const hienthibinhluan = document.querySelector('.hienthibinhluan');
    const allBinhluan = hienthibinhluan.querySelector('.all-binhluan');
    const loadMore = hienthibinhluan.querySelector('.load-more');

    const binhluanItems = [];
    let currentIndex = 0;
    const showMoreComments = () => {
        const showCount = 3;
        for (let i = currentIndex; i < currentIndex + showCount; i++) {
            if (binhluanItems[i]) {
                binhluanItems[i].style.display = 'block';
            }
        }
        currentIndex += showCount;
        if (currentIndex >= binhluanItems.length) {
            loadMore.style.display = 'none';
        }
    };
    showMoreComments();
    hienthibinhluan.addEventListener('scroll', function() {
        if (hienthibinhluan.scrollTop === 0) {
            showMoreComments();
        }
    });
});
</script>