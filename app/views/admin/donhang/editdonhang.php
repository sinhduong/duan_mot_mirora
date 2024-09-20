
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa đơn hàng</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="post">
        <div class="card-body">
            
            <div class="form-group">
                <label for="exampleInputPassword1">ID người dùng</label>
                <input type="text" class="form-control" required name="id_nguoi_dung" value="<?=$id_nguoi_dung?>" id="exampleInputPassword1" placeholder="ID người dùng" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ngày đặt hàng</label>
                <input type="date" class="form-control" required name="ngay_dat" value="<?=$ngay_dat?>" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Địa chỉ giao hàng</label>
                <input type="text" class="form-control" required name="dia_chi_giao_hang" value="<?=$dia_chi_giao_hang?>" id="exampleInputPassword1" placeholder="Địa chỉ giao hàng">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="1">Chờ xác nhận</option>
                    <option value="2">Đã phê duyệt</option>
                    <option value="3">Đang giao hàng</option>
                    <option value="4">Đã giao hàng</option>
                </select>
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật đơn hàng</button>
        </div>
    </form>
</div>