<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Lịch sử đơn hàng</h1>
                <ul class="breadcrumb justify-content-center">
                    <li class="current"><a href="index.php">Trang chủ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb area End -->

<!-- Main content wrapper start -->

<div class="row">
    <div class="col-12">
        <!-- Checkout Area Start -->
        <div class="checkout-wrapper bg--2">
            <div class="row">
            </div>
            <br>
            <div class="cart-table table-content table-responsive">
                <table class="table mb--30">
                    <thead>
                        <tr>

                            <th>Người nhận</th>
                            <th>Ngày đặt</th>
                            <th>Tổng đơn hàng</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Phương thức thanh toán</th>
                            <th>Trạng thái</th>
                            <th>Hoạt động</th>
                           
                        </tr>
                        <?php 
                        foreach($donhang as $dh){
                            extract($dh);
                            if($trang_thai == 0){
                                $th = "Chờ xác nhận";
                            }else if($trang_thai == 1){
                                $th = "Đã xác nhận";
                            }else if($trang_thai == 2){
                                $th = "Đang giao hàng";
                            }else{
                                $th = "Đã nhận hàng";
                            }
                            if($pttt == 0){
                                $pttt = "Thanh toán khi nhận hàng";
                            }else if($pttt == 1){
                                $pttt = "Thanh toán VNPAY";
                            }else{
                                $pttt = "Thanh toán Momo";
                            }
                            echo ' <tr>
                            <td>'.$name.'</td>
                            <td>'.$ngay_dat.'</td>
                            <td>'.$tong_dh.'</td>
                            <td>'.$dia_chi_giao_hang.'</td>
                            <td>'.$pttt.'</td>
                            <td>'.$th.'</td>
                            <td><a href="index.php?redirect=donhangchitiet&iddh='.$id.'">Xem chi tiết</a></td>
                        </tr>';
                        }
                        ?>
                </table>
                
            </div>
        </div>
    </div>
</div>