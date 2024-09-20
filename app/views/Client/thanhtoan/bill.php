<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Thanh toán thành công</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.html">Trang chủ</a></li>
                    <li class="current"><a href="checkout.html">Thanh toán thành công</a></li>
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
                                    <h2>Thông tin nhận hàng</h2>
                                </div>
                                <div class="checkout-form mb--30">
                                    <?php
                                        if (isset($_SESSION['id_order']) && !empty($_SESSION['id_order'])) {
                                            $get_show_info = get_show_bill_info($_SESSION['id_order']);
                                            extract($get_show_info);
                                            $pttt = method_pay($pttt);
                                        if($trang_thai === 0){
                                            $tt = "Chờ xác nhận";
                                        }

                                    ?>
                                    <p>Người nhận: <?=$ho_ten?></p>
                                    <p>Email: <?=$email?></p>
                                    <p>Địa chỉ: <?=$dia_chi_giao_hang?></p>
                                    <p>Số điện thoại: <?=$sdt?></p>
                                    <p>Ngày đặt: <?=$ngay_dat?></p>
                                    <p>Tổng đơn hàng: <?=$tong_dh?></p>
                                    <p>Phương thức thanh toán: <?=$pttt?></p>
                                    <p>Trạng thái đơn hàng: <?=$tt?></p>

                                        <?php
                                }
                            ?>
                                </div>
                                    <a href="index.php"><input name="dongydathang" type="submit" class="btn btn-style-3" value="Tiếp tục mua hàng"></a>
                            </div>
               
                            <?php  //var_dump($load_one_dh); exit;?>
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
                                                if (isset($_SESSION['id_order']) && !empty($_SESSION['id_order'])) {
                                                    $get_show_detail = get_show_bill_detail($_SESSION['id_order']);
                                                    $tong = 0;
                                                    foreach ($get_show_detail as $item) :
                                                        $thanhtien = $item['gia_ban'] * $item['so_luong'];
                                                        $tong += $thanhtien;
                                                    
                                                    // extract($item);
                                                ?>
                                            
                                                <tr>
                                                    <td><img src="assets/img/products/<?= $item['hinh_anh'] ?>" alt=""></td>
                                                    <td><?=$item['so_luong']?></td>
                                                    <td><?=$thanhtien?></td>
                                                </tr>

                                            <?php 
                                                endforeach;}
                                            
                                            ?>
                                    </ul>
                                            </tbody>
                                            <tfoot>
                                           
                                                <tr class="order-total">
                                                    <th>Tổng Đơn Hàng</th>
                                                    <td colspan="3"><span class="order-total-ammount"><?=$tong?></span></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="checkout-payment">
                                    <div class="payment-btn-group">
                               
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