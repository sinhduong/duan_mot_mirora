
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm chi tiết sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="index.php?act=addctsanpham" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">tên sản phẩm</label>
                <input type="text" class="form-control" required name="name" id="exampleInputPassword1" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">giá gốc</label>
                <input type="text" class="form-control" required name="gia" id="exampleInputPassword1" placeholder="Giá gốc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">giá giảm</label>
                <input type="text" class="form-control" required name="gia_giam" id="exampleInputPassword1" placeholder="Giá giảm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">mô tả</label>
                <input type="text" class="form-control" required name="mo_ta" id="exampleInputPassword1" placeholder="Mô tả">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Màu sắc</label>
                <input type="text" class="form-control" required name="mau_sac" id="exampleInputPassword1" placeholder="Màu sắc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kích thước</label>
                <input type="text" class="form-control" required name="kich_thuoc" id="exampleInputPassword1" placeholder="Kích thước">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Chất liệu</label>
                <input type="text" class="form-control" required name="chat_lieu" id="exampleInputPassword1" placeholder="Chất liệu">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hình ảnh</label>
                <input  type="file"  required name="hinh_anh" id="exampleInputPassword1" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trọng lượng</label>
                <input type="text" class="form-control" required name="trong_luong" id="exampleInputPassword1" placeholder="Trọng lượng">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phụ kiện</label>
                <input type="text" class="form-control" required name="phu_kien" id="exampleInputPassword1" placeholder="Phụ kiện">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Khuyến mãi</label>
                <select name="khuyen_mai" id="">
                    <option value="Giảm 20%">-20%</option>
                    <option value="Giảm 50%">-50%</option>
                    <option value="Giảm 100%">-100%</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tình trạng</label>
                <select name="tinh_trang" id="">
                    <option value="Mới">Mới</option>
                    <option value="Cũ">cũ</option>
                    <option value="Còn hàng">còn hàng</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Bảo hành</label>
                <select name="bao_hanh" id="">
                    <option value="0">3 tháng</option>
                    <option value="1">6 tháng</option>
                    <option value="2">1 năm</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputPassword1">ID sản phẩm</label>
                <input type="text" class="form-control" required name="id_sanpham" id="exampleInputPassword1" >
            </div> -->
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addctsanpham" class="btn btn-primary">Thêm chi tiết sản phẩm</button>
        </div>
    </form>
</div>