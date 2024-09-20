
    <!-- Main Wrapper Start -->
    <div class="wrapper bg--shaft">
        <!-- Header Area Start -->
        <header class="header headery-style-1">
            <div class="header-bottom header-top-1 position-relative navigation-wrap fixed-header">
                <div class="container position-static">
                    <!--  -->
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Shop</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Trang chủ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="shop-area pt--40 pb--80 pt-md--30 pb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Shop Toolbar Start -->
                                    <div class="shop-toolbar">
                                        <div class="product-view-mode" data-default="3">
                                            <a class="grid-2" data-target="gridview-2" data-bs-toggle="tooltip" data-bs-placement="top" title="2">2</a>
                                            <a class="active grid-3" data-target="gridview-3" data-bs-toggle="tooltip" data-bs-placement="top" title="3">3</a>
                                            <a class="grid-4" data-target="gridview-4" data-bs-toggle="tooltip" data-bs-placement="top" title="4">4</a>
                                            <a class="grid-5" data-target="gridview-5" data-bs-toggle="tooltip" data-bs-placement="top" title="5">5</a>
                                            <a class="list" data-target="listview" data-bs-toggle="tooltip" data-bs-placement="top" title="5">List</a>
                                        </div>
                                        <!-- <span class="product-pages">Showing 1 to 9 of 11 (2 Pages)</span> -->
                                        <!-- <div class="product-showing">
                                            <label class="select-label">Show:</label>
                                            <select class="short-select nice-select">
                                                <option value="1">9</option>
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="1">5</option>
                                                <option value="1">9</option>
                                            </select>
                                        </div> -->
                                        <!-- <div class="product-short">
                                            <label class="select-label">Chọn:</label>
                                            <select class="short-select nice-select">
                                                <option value="1">Relevance</option>
                                                <option value="2">Name, A to Z</option>
                                                <option value="3">Name, Z to A</option>
                                                <option value="4">Price, low to high</option>
                                                <option value="5">Price, high to low</option>
                                            </select>
                                        </div> -->
                                    </div>
                                    <!-- Shop Toolbar End -->
                                </div>
                            </div>
                            
                            <!-- Main Shop wrapper Start -->
                            <div class="shop-product-wrap grid gridview-3 row no-gutters">
                            <?php
                            $i = 0;
                            $sanpham = all_sanpham();

                            foreach ($sanpham as $row) :
                                extract($row);
                            ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                        <img src="public/images/<?= $hinh_anh ?>" alt="Product" class="primary-image" />
                                            <img src="public/images/<?= $hinh_anh ?>" alt="Product" class="secondary-image" />
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a href="index.php?redirect=chitietsanpham&id=<?= $id ?>" data-bs-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Xem chi tiết</a>                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="index.php?redirect=chitietsanpham&id=<?= $id ?>"><?= $name ?></a></h4>
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
                                            <div class="product-action">
                                                <a class="same-action" href="" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="index.php?redirect=giohang" title="wishlist"><span>Thêm giỏ</span></a>
                                                <a class="same-action compare-mrg" data-bs-toggle="modal"  href="">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                        <img src="public/images/<?= $hinh_anh ?>" alt="Product" class="primary-image" />
                                            <img src="public/images/<?= $hinh_anh ?>" alt="Product" class="secondary-image" />
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-bs-toggle="modal" data-bs-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span><?=$name?></span>
                                            <h4><a href="product-details.html"><?=$name?></a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              <?=$mo_ta?>
                                            </p>
                                            <form action="index.php?redirect=themgiohang" method="post">
                                                            <div class="product-action">
                                                                <a class="same-action" href="" title="wishlist">
                                                                    <i class="fa fa-heart-o"></i>
                                                                </a>
                                                                <input class="add_cart cart-item action-cart" type="submit" name="addtocart" value="Thêm giỏ">
                                                                <input type="hidden" name="masp" value="<?= $id ?>">
                                                                <input type="hidden" name="hinhanh" value="<?= $hinh_anh ?>">
                                                                <input type="hidden" name="tensp" value="<?= $name ?>">
                                                                <input type="hidden" name="giagiam" value="<?= $gia_giam ?>">
                                                                <input type="hidden" name="gia" value="<?= $gia ?>">
                                                                <input type="number" name="soluong" min="1" max="10" value="1">

                                                                <a class="same-action compare-mrg" data-bs-toggle="modal"  href="">
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
                            <!-- Main Shop wrapper End -->

                            <!-- Pagination Start -->
                            <div class="pagination-wrap mt--15 mt-md--10">
                                <!-- <p class="page-ammount">Showing 1 to 9 of 15 (2 Pages)</p>
                                <ul class="pagination">
                                    <li><a href="#" class="first">|&lt;</a></li>
                                    <li><a href="#" class="prev">&lt;</a></li>
                                    <li><a href="#" class="current">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#" class="next">&gt;</a></li>
                                    <li><a href="#" class="next">&gt;|</a></li>
                                </ul> -->
                            </div>
                            <!-- Pagination End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->

       