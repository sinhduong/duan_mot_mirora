            <!-- Promo Box area Start -->

            <div class="promo-box-area border-bottom ptb--80 ptb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-sm--30">
                            <div class="promo promo-1">
                                <a href="" class="promo__box">
                                    <img src="assets/img/banner/img1-top-mirora1.jpg" alt="Product Category">
                                    <span class="promo__content">
                                        <span class="promo__label">Thiết kế sáng tạo</span>
                                        <span class="promo__name">Hiện đại và sạch sẽ</span>
                                        <span class="promo__price">Từ $60.99 - Giảm 20%</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-sm--30">
                            <div class="promo promo-1">
                                <a href="" class="promo__box">
                                    <img src="assets/img/banner/img2-top-mirora1.jpg" alt="Product Category">
                                    <span class="promo__content">
                                        <span class="promo__label">Các Sản Phẩm Bán Chạy Nhất</span>
                                        <span class="promo__name">Đồ trang sức và kim cương</span>
                                        <span class="promo__price">Chỉ Từ $99.00</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="promo promo-1">
                                <a href="" class="promo__box">
                                    <img src="assets/img/banner/img3-top-mirora1.jpg" alt="Product Category">
                                    <span class="promo__content">
                                        <span class="promo__label">Sản phẩm onsale</span>
                                        <span class="promo__name">Đồng hồ Rider hoàn hảo</span>
                                        <span class="promo__price">Giảm giá 30%</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--40 mt-md--30">
                        <div class="col-12 text-center">
                            <p class="tweet"><i class="fa fa-twitter"></i> Kiểm tra "Chất lượng - An toàn - Đáp ứng nhu cầu khách hàng, xem chi tiết tại:<a href="#">https://www.facebook.com/duong.sinh.5661</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo Box area End -->




            <!-- Products Tab area Start -->

            <div class="product-tab pt--80 pb--60 pt-md--60 pb-md--45">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">

                            <div class="tab-content product-tab__content" id="product-tabContent">
                                <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                                    <div class="product-carousel js-product-carousel">
                                        <?php
                                        $i = 0;
                                        $sanpham = all_sanpham();

                                        foreach ($sanpham as $row) :
                                            extract($row);
                                        ?>
                                            <div class="product-carousel-group">
                                                <div class="mirora-product">
                                                    <div class="product-img">
                                                        <img src="public/images/<?= $hinh_anh ?>" href="index.php?redirect=chitietsanpham&id=<?= $id ?>" alt="Product" class="primary-image" />
                                                        <img src="public/images/<?= $hinh_anh ?>" href="index.php?redirect=chitietsanpham&id=<?= $id ?>" alt="Product" class="secondary-image" />
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

                <!-- Products Tab area End -->

                <!-- Banner area Start -->

                <section class="banner-area banner-bg-1 ptb--80 ptb-md--60">
                    <div class="banner-box text-center">
                        <h5 class="banner__label">Bán hết 20% tất cả các sản phẩm</h5>
                        <h2 class="banner__name">Bộ sưu tập xu hướng mới</h2>
                        <p class="banner__text mb--50 mb-md--20">Chúng tôi tin rằng thiết kế tốt luôn là trong mùa</p>
                        <a href="" class="btn btn-bordered btn-style-1">mua ngay</a>
                    </div>
                </section>






                <section class="blog-area pt--80 pb--40 pt-md--60 pb-md--30">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title mb--30">
                                    <h2>Bài viết của chúng tôi</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="blog-carousel nav-top slick-item-gutter">
                                    <article class="blog">
                                        <a href="" class="blog__thumb">
                                            <img src="assets/img/blog/post1-370x230.jpg" alt="Blog">
                                        </a>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <p class="blog__author">Viết bởi: <a href="blog.html">Dương sinh korea</a></p>
                                                <p class="blog__date"><a href="blog.html">20-10-2023</a></p>
                                            </div>

                                            <h3 class="blog__title"><a href="">Thiết kế đẹp, sang trọng, tỉ mỉ, phù hợp với người có tiền</a></h3>
                                            <div class="blog__text">
                                                <p>Thật ngạc nhiên khi lưu ý hơn là bức thư của sinhduong, mà bây giờ chúng ta nghĩ rằng một chút rõ ràng, những lá thư được ưa thích của nhân loại trong các biển.</p>
                                                <a class="read-more" href="">Đọc thêm</a>
                                            </div>

                                        </div>
                                    </article>
                                    <article class="blog">
                                        <a href="" class="blog__thumb">
                                            <img src="assets/img/blog/post2-370x230.jpg" alt="Blog">
                                        </a>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <p class="blog__author">Viết bởi: <a href="">Hữu Đan đz</a></p>
                                                <p class="blog__date"><a href="">12-08-2023</a></p>
                                            </div>

                                            <h3 class="blog__title"><a href="">Chuối mềm trước khi nhận được không cần phải miễn phí.</a></h3>
                                            <div class="blog__text">
                                                <p>Thật ngạc nhiên khi lưu ý hơn là bức thư của Gothic, mà bây giờ chúng ta nghĩ rằng một chút rõ ràng, những lá thư được ưa thích của nhân loại trong các biển.</p>
                                                <a class="read-more" href="blog-details-image.html">Đọc thêm</a>
                                            </div>

                                        </div>
                                    </article>
                                    <article class="blog">
                                        <a href="" class="blog__thumb">
                                            <img src="assets/img/blog/post3-370x230.jpg" alt="Blog">
                                        </a>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <p class="blog__author">Viết bởi <a href="">Thế Huy đz</a></p>
                                                <p class="blog__date"><a href="">20 Oct 2018</a></p>
                                            </div>

                                            <h3 class="blog__title"><a href="">Chuối mềm trước khi nhận được không cần phải miễn phí</a></h3>
                                            <div class="blog__text">
                                                <p>Khảo sát mềm trước đây, không cần thiết không cần miễn phí, sản xuất để lưu ý hơn chữ của sinhduong, giờ đây nghĩ rằng một chút rõ ràng, những lá thư ưa thích của nhân loại bởi HuuDan.</p>
                                                <a class="read-more" href="">Đọc thêm</a>
                                            </div>

                                        </div>
                                    </article>
                                    <article class="blog">
                                        <a href="" class="blog__thumb">
                                            <img src="assets/img/blog/post4-370x230.jpg" alt="Blog">
                                        </a>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <p class="blog__author">Post By: <a href="">HasTech</a></p>
                                                <p class="blog__date"><a href="">20 Oct 2018</a></p>
                                            </div>

                                            <h3 class="blog__title"><a href="">Mollis aliquet ante, suscipit non eget nulla libero, vestibulum condimentum.</a></h3>
                                            <div class="blog__text">
                                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula.</p>
                                                <a class="read-more" href="">Read More</a>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="row mt--35 mt-md--25">
                            <div class="col-12 text-center">
                                <a href="https://www.instagram.com/duong.sinh.56614/" target="_blank" rel="noopener noreferrer" class="btn btn-medium btn-style-2"><i class="fa fa-instagram"></i>Instagram</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Blog area End -->

                <!-- Newsletter area End -->

                <div class="newsletter-area pt--40 pb--80 pt-md--30 pb-md--60">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-10">
                                <div class="newsletter text-center">
                                    <h3 class="color--white">Tham gia bản tin của chúng tôi ngay bây giờ!</h3>
                                    <p>Thông thường không có sự rõ ràng về việc sử dụng đọc thông thường ở những người làm cho sự rõ ràng của họ, các cuộc điều tra làm vỡ độc giả đọc tôi nhiều hơn là đọc thường xuyên hơn.</p>

                                    <form class="newsletter-form validate mt--40" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-newsletter-form" name="mc-embedded-newsletter-form" target="_blank" novalidate="">
                                        <input type="email" name="email" id="sub_email" placeholder="Nhập địa chỉ email của bạn ở đây.." class="newsletter-form__input">
                                        <input type="submit" value="Subscribe" class="btn newsletter-btn btn-style-1">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter area End -->

                <!-- Promo Box area Start -->

                <div class="promo-box-area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-md-6 mb-sm--20">
                                <div class="promo">
                                    <a href="index.php?redirect=shop" class="promo__box promo__box-2">
                                        <img src="assets/img/banner/img1-bottom-mirora1.jpg" alt="Product Category">
                                        <span class="promo__content promo__content-2">
                                            <span class="promo__label">Mới đến 2018</span>
                                            <span class="promo__name">Nước hoa sang trọng 2023</span>
                                            <span class="promo__price">Phụ kiện nam</span>
                                            <span class="promo__link">Khám phá ngay bây giờ</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="promo">
                                    <a href="index.php?redirect=shop" class="promo__box promo__box-2">
                                        <img src="assets/img/banner/img2-bottom-mirora1.jpg" alt="Product Category">
                                        <span class="promo__content promo__content-2">
                                            <span class="promo__label">Xu hướng sản phẩm 2023</span>
                                            <span class="promo__name">Đồng hồ Maurice Lacroix</span>
                                            <span class="promo__price">Chỉ từ $ 162,00 - giảm giá 20%</span>
                                            <span class="promo__link">Khám phá ngay bây giờ</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
