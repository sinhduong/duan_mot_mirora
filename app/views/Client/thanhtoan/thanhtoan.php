<?php
if (isset($_SESSION['taikhoan'])) {
    $tk = $_SESSION['taikhoan'];
}

?>
<form action="index.php?redirect=payment" id="paymentForm" method="post">
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
                                        <h2>Địa chỉ nhận hàng</h2>
                                    </div>

                                    <input type="hidden" name="id_user" value="<?=$tk['id']?>">
                                    <div class="checkout-form">

                                        <div class="form-row mb--30">
                                            <div class="form__group col-md-12 mb-sm--30">
                                                <label for="name" class="form__label">Họ Và Tên: <span>*</span></label>
                                                <input type="text" name="name" id="billing_fname" class="form__input form__input--2" value="<?= isset($tk['name']) ? $tk['name'] : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb--30">
                                            <div class="form__group col-12">
                                                <label for="dia_chi" class="form__label">Địa Chỉ: <span>*</span></label>
                                                <input type="text" name="dia_chi" id="billing_streetAddress" class="form__input form__input--2" value="<?= isset($tk['dia_chi']) ? $tk['dia_chi'] : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb--30">
                                            <div class="form__group col-md-12 mb-sm--30">
                                                <label for="phone" class="form__label">Số Điện Thoại: <span>*</span></label>
                                                <input type="text" name="phone" id="billing_phone" class="form__input form__input--2" value="<?= isset($tk['phone']) ? $tk['phone'] : '' ?>">
                                            </div>
                                            <div class="form__group col-md-12">
                                                <label for="email" class="form__label">Email: <span></span></label>
                                                <input type="email" name="email" id="billing_email" class="form__input form__input--2" value="<?= isset($tk['email']) ? $tk['email'] : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form__group col-12">
                                                <label for="orderNotes" class="form__label">Ghi Chú:</label>
                                                <textarea class="form__input form__input--2 form__input--textarea" id="orderNotes" name="orderNotes" placeholder="Ghi Chú..."></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 mt-md--30">
                                    <div class="order-details">
                                        <h3 class="heading-tertiary">Thông tin đơn hàng</h3>
                                        <div class="order-table table-content table-responsive mb--30">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Sản Phẩm</th>
                                                        <th>Số lượng</th>
                                                        <th>Giá Tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $tong = 0;
                                                    $ship = 30000;
                                                    foreach ($_SESSION['mycart'] as $cart) :
                                                        $thanhtien = $cart[3] * $cart[5];
                                                        $tong += $thanhtien;
                                                    ?>

                                                        <tr>
                                                            <td><img src="assets/img/products/<?= $cart[1] ?>" alt=""></td>
                                                            <td><?= $cart[5] ?></td>
                                                            <td>$ <?= $thanhtien ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                    <tr class="order-total">
                                                        <th>Tổng Đơn Hàng</th>
                                                        <td colspan="2"><span class="order-total-ammount">$ <?= $tong ?></span></td>
                                                        <input type="hidden" name="tong_don" value="<?=$tong?>">
                                                    </tr>

                                                </tbody>
                                                <tfoot>


                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="checkout-payment">
                                            <div class="payment-btn-group">
                                                <div class="checkout-payment">
                                                    <div class="payment-group">

                                                        <h5>Chọn phương thức thanh toán</h5> <br>

                                                        <div class="custom-radio payment-radio">
                                                            <input style="width: 20px;" id="option1" type="radio" value="1" name="cod" />
                                                            <label class="payment-label" for="option1">Thanh Toán Khi Nhận Hàng</label>
                                                        </div> <br>

                                                        <div class="custom-radio payment-radio">
                                                            <input style="width: 20px;" id="option2" type="radio" value="2" name="redirect" />
                                                            <label class="payment-label" for="option2">Thanh toán VNPAY</label>
                                                        </div> <br>

                                                        <div class="custom-radio payment-radio">
                                                            <input style="width: 20px;" id="option3" type="radio" value="3" name="payment_method" />
                                                        </div> <br>


                                                    </div>
                                                </div>
                                                <?php 
                                                // Validate đăng nhập mới mua được hàng
                                                    if (isset($_SESSION['taikhoan'])){
                                                        echo "<script>var isLogIn = true;</script>";
                                                    }else {
                                                        echo "<script>var isLogIn = false;</script>";
                                                    }
                                                ?>
                                                <p class="alert alert-danger" style="display: none" id="messageLogin"></p>

                                                <!-- <input href="index.php?redirect=bill"> -->
                                                <input name="dathang" type="submit" class="btn btn-style-3" value="Đặt hàng"></input>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Checkout Area End -->
            </div>
        </div>
    </div>
</form>
<script>
    // Validate đăng nhập mới thanh toán được
    document.getElementById('paymentForm').addEventListener('submit', function(event) {
        if (!isLogIn) {
            // Ngăn chặn việc gửi form nếu người dùng chưa đăng nhập
            event.preventDefault();
            document.getElementById('messageLogin').style.display = 'block';
            document.getElementById('messageLogin').textContent = 'Bạn cần đăng nhập để thực hiện đặt hàng!';
        }
    });

    // input:radio Không cùng name vẫn chọn được
    const checkboxes = document.querySelectorAll('input[type="radio"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                checkboxes.forEach(function(otherCheckbox) {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });

    // Thiết lập input radio đầu tiên là đã chọn
    document.addEventListener('DOMContentLoaded', function() {
        var firstRadio = document.getElementById('option1'); // Lấy id input radio đầu tiên
        if (firstRadio) {
            firstRadio.checked = true;
        }
    });
</script>