<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Đơn hàng chi tiết</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.php">Trang chủ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb area End -->

<!-- Main content wrapper start -->
<div class="main-content-wrapper">
    <div class="checkout-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- User Action Start -->

                    <!-- User Action End -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Checkout Area Start -->
                    <div class="checkout-wrapper bg--2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout-title">
                                    <h2>Thông Tin Chi Tiết</h2>
                                </div>
                                <div class="checkout-form">
                                    <form action="#" class="form">
                                        <div class="form-row mb--30">
                                            <div class="form__group col-md-12 mb-sm--30">
                                                <label for="billing_fname" class="form__label">Họ Và Tên: <span>*</span></label>
                                                <input type="text" name="billing_fname" id="billing_fname" class="form__input form__input--2" value="<?=$load_one_dh['name']?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb--30">
                                            <div class="form__group col-12">
                                                <label for="billing_streetAddress" class="form__label">Địa Chỉ: <span>*</span></label>
                                                <input type="text" name="billing_streetAddress" id="billing_streetAddress" class="form__input form__input--2" value="<?=$load_one_dh['dia_chi_giao_hang']?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb--30">
                                            <div class="form__group col-md-12 mb-sm--30">
                                                <label for="billing_phone" class="form__label">Số Điện Thoại: <span>*</span></label>
                                                <input type="text" name="billing_phone" id="billing_phone" class="form__input form__input--2" value="<?=$load_one_dh['phone']?>">
                                            </div>
                                            <div class="form__group col-md-12">
                                                <label for="billing_email" class="form__label">Email: <span></span></label>
                                                <input type="email" name="billing_email" id="billing_email" class="form__input form__input--2" value="<?=$load_one_dh['email']?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form__group col-12">
                                                <label for="orderNotes" class="form__label">Ghi Chú:</label>
                                                <textarea class="form__input form__input--2 form__input--textarea" id="orderNotes" name="orderNotes" placeholder="Ghi Chú..."><?php echo !empty($load_one_dh['ghichu']) ? $load_one_dh['ghichu'] : ''; ?></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
               
                            <?php  //var_dump($load_one_dh); exit;?>
                            <div class="col-lg-6 mt-md--30">
                                <div class="order-details">
                                    <h3 class="heading-tertiary">Đơn Hàng Của Bạn</h3>
                                    <div class="order-table table-content table-responsive mb--30">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Sản Phẩm</th>
                                                    <th>Giá Tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?=$name?> <strong>x<?=$load_one_dh['so_luong']?></strong></td>
                                                    <td><?=$load_one_dh['gia']?></td>
                                                </tr>
                                            
                                            </tbody>
                                            <tfoot>
                                           
                                                <tr class="order-total">
                                                    <th>Tổng Đơn Hàng</th>
                                                    <td><span class="order-total-ammount"><?=$load_one_dh['tong_dh']?></span></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="checkout-payment">
                                    <div class="payment-btn-group">
                                <a href="index.php?redirect=muahangthanhcong"><input name="dongydathang" type="submit" class="btn btn-style-3" value="Hủy đơn hàng"></a>
                                </div>
                                    </div>
                                </div>
                              
                               
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Checkout Area End -->
        </div>
    </div>
</div>
</div>
</div>