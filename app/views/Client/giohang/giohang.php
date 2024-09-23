<?php
// Delete
// session_start();
// if (isset($_GET['del']) && ($_GET['del'] >= 0)) {
//     array_splice($_SESSION['giohang'], $_GET['del'], 1);
// }



?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Giỏ hàng</h1>
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
    <div class="cart-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="cart-wrapper bg--2 mb--80 mb-md--60">
                <div class="row">
                    <div class="col-12">
                        <!-- Cart Area Start -->
                        <form action="post" class="form cart-form">
                            <div class="cart-table table-content table-responsive">
                                <table class="table mb--30">
                                    <thead>
                                        <tr>
                                            
                                            <th>Ảnh</th>
                                            <th>Sản phẩm</th>
                                            <th>Giá gốc</th>
                                            <th>Giá giảm</th>
                                            <th>Số lượng</th>
                                            <th>Thành Tiền</th>
                                            <th>Xóa</th>
                                        </tr>



                                    </thead>
                                    <tbody>

                                        <?php
                                            $sum = 0;
                                            $i = 0;
                                            // var_dump($_SESSION['mycart']);
                                            // unset($_SESSION['mycart']);
                                            foreach($_SESSION['mycart'] as $cart) :
                                                $img = 'assets/img/products/' . $cart[2];
                                                $thanhtien = $cart[3] * $cart[5];
                                                $sum += $thanhtien;
                                                $link="?redirect=del_cart&idcart=$i";
                                        ?>
                                    <tr>
                                        <td><img src="assets/img/products/<?=$cart[1]?>" alt=""></td>
                                        <td><?=$cart[2]?></td>
                                        <td>$ <?=$cart[4]?></td>
                                        <td>$ <?=$cart[3]?></td>
                                        <td><?=$cart[5]?></td>
                                        <td>$ <?=$thanhtien?></td>
                                        <td><a class="delete" href="<?=$link?>"><i class="fa fa-times"> xóa</i></a></td>
                                    </tr>
                                        
                                        <?php $i++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">

                                <div class="col-12 text-md-right">
                                    <div class="cart-btn-group" style="display: flex; justify-content: space-between; margin-right: 30px;">
                                        <div class="box">
                                        <a href="index.php" class="btn btn-medium btn-style-3">Thêm sản phẩm</a>

                                        <a href="index.php?redirect=del_all_cart"  class="btn btn-medium btn-style-3">XÓA HẾT</a>
                                        </div>
                                       
                                        <a href="index.php?redirect=thanhtoan"  class="btn btn-medium btn-style-3">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
   
</div>
  