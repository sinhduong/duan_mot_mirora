<div class="tab-content product-tab__content" id="product-tabContent">
    <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
        <div class="product-carousel js-product-carousel">
            <div class="product-carousel-group">
         
                <?php
                $tk_sanpham = timKiemTheoTen();
                if(empty($tk_sanpham)):
                    echo '<img style="width:1200px;height:600px" class="img-fluid" src="public/images/no-result.jpg">';
                else:
                    foreach($tk_sanpham as $tt):
                        extract($tt);
                        
                        
                        
                ?>

                <div class="mirora-product">
                    <div class="product-img">
                        <img src="assets/img/products/1-450x450.jpg" alt="Product" class="primary-image" />
                        <img src="assets/img/products/1-1-450x450.jpg" alt="Product" class="secondary-image" />
                        <div class="product-img-overlay">
                            <span class="product-label discount">
                                -10%
                            </span>
                            <a data-bs-toggle="modal" data-bs-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <span>Cartier</span>
                        <h4><a href="index.php?redirect=chitietsanpham&id=<?=$id?>"><?=$name?></a></h4>
                        <div class="product-price-wrapper">
                            <span class="money"><?=$gia_giam?></span>
                            <span class="product-price-old">
                                <span class="money"><?=$gia?></span>
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
                            <?=$mo_ta?>
                        </p>
                        <div class="product-action">
                            <a class="same-action" href="" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </a>
                            <a class="add_cart cart-item action-cart" href="index.php?redirect=giohang" title="wishlist"><span>Giỏ hàng</span></a>
                            <a class="same-action compare-mrg" data-bs-toggle="modal"  href="">
                                <i class="fa fa-sliders fa-rotate-90"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                  endforeach;
                endif;
                ?>
            </div>
            
        </div>
    </div>
</div>