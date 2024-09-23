<div class="product-tab pt--80 pb--60 pt-md--60 pb-md--45">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">

                <div class="tab-content product-tab__content" id="product-tabContent">
                    <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                        <!--  -->
                        <div class="product-carousel js-product-carousel">
                            <?php
                            $i = 0;
                            $sanpham = all_sanpham_ban_chay();

                            foreach ($sanpham as $row) :
                                extract($row);
                            ?>
                                <div class="product-carousel-group">
                                    <div class="mirora-product">
                                        <div class="product-img">
                                            <img src="public/images/<?= $hinh_anh ?>" alt="Product" class="primary-image" />
                                            <img src="public/images/<?= $hinh_anh ?>" alt="Product" class="secondary-image" />
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -20%
                                                </span>
                                                <a href="index.php?redirect=chitietsanpham&id=<?= $id ?>" data-bs-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Xem chi tiết</a>
                                            </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>