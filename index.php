<?php
    include "config.php";

    include "app/models/ClientModel/timkiem.php";
    include "app/models/ClientModel/danhmuc.php";
    include "app/models/ClientModel/sanpham.php";
    include "app/models/ClientModel/taikhoan.php";
    include "app/models/ClientModel/binhluan.php";
    include "app/models/ClientModel/giohang.php";
    
    
    
    include "app/views/Client/layout/header.php";
    
    include "app/controllers/ClientController/ClientController.php";
    include "app/views/Client/layout/footer.php";
?>