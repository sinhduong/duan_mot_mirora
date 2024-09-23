<div class="card">
    <div>
        <h3>Thống kê doanh thu đơn hàng</h3>
        <form action="index.php?act=thongke" method="POST">
            <h5>Chọn thời gian:</h5>
            <input type="date" name="start_date">
            <input type="date" name="end_date">
            <select name="choose_time" id="">
                <option value="year">Năm</option>
                <option value="month">Tháng</option>
                <option value="week">Tuần</option>
                <option value="date">Ngày</option>
            </select>
            <div class="flex-betwent ">
                <input type="submit" value="Lọc" name="search">
            </div>

        </form>

    </div>

    <div style="height: 300px;" id="chart"></div>
    <script>
    CKEDITOR.replace('thongtinlienhe');
    CKEDITOR.replace('tomtat');
    CKEDITOR.replace('noidung');

    $(document).ready(function() {
        <?php
                               //$statistical_sale = statistical_sale();
                                $chartData = [];
                              
                                    foreach ($statistical_sale as $value) {
                                        extract($value);
                                        $chartData[] = [
                                            'year' => $date, // Thay 'year' bằng trường trong $value chứa thông tin năm
                                            'order' => $so_luong_don_hang, // Thay 'order' bằng trường trong $value chứa thông tin đơn hàng
                                            'sales' => $doanh_thu, // Thay 'sales' bằng trường trong $value chứa thông tin doanh thu
                                            'quantity' => $so_luong_ban_ra, // Thay 'quantity' bằng trường trong $value chứa thông tin số lượng bán ra
                                        ];
                                    }
                                
                              
                            ?>

        new Morris.Area({
            element: 'chart',
            data: <?php echo json_encode($chartData); ?>,
            xkey: 'year',
            ykeys: ['order', 'sales', 'quantity'],
            labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra'],
            lineColors: ['#3498db', '#2ecc71', '#e74c3c'],
            lineWidth: 2,
            pointSize: 4,
            hideHover: 'auto',
            parseTime: false,
            behaveLikeLine: true,
            fillOpacity: 0.2,
            stacked: true,
            smooth: false
        });
    });
    </script>
</div>
<a href="#"><button class="btn btn-danger" style="margin-bottom: 20px;">Thông tin chi tiết thống kê</button></a>

<div class="row">
    <table class="table" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Số lượng đơn hàng</th>
                <th scope="col">Số lượng bán</th>
                <th scope="col">Tổng đơn hàng</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($statistical as $value) {
            extract($value);
            echo'     <tr>
            <td scope="col">'.$id.'</td>
            <td scope="col">'.$name.'</td>
            <td scope="col"><img src="../../../public/images/'.$hinh_anh.'" alt="Product" class="primary-image" width= 50px></td>
            <td scope="col">'.$ngay_dat.'</td>
            <td scope="col">'.$so_luong_don_hang.'</td>
            <td scope="col">'.$so_luong_ban.'</td>
            <td scope="col">'.$tong_don_hang.'</td>
           
            
            </tr>';
            
            }?>

            </td>


        </tbody>
    </table>
    <img src="" alt="">
</div>