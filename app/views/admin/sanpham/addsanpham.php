<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="name" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giá gốc</label>
                <input type="text" class="form-control" required name="gia" id="exampleInputPassword1" placeholder="Nhập vào giá gốc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giá giảm</label>
                <input type="text" class="form-control" required name="gia_giam" id="exampleInputPassword1" placeholder="Nhập vào giá giảm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mo_ta" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hình ảnh</label>
                <input type="file" required name="hinh_anh" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mặt hàng</label>
                <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addsanpham" class="btn btn-primary">Thêm sản phẩm</button>
        </div>
    </form>
</div>