<?php
$editsp = select_onesp();
extract($editsp);
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa sản phẩm</h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" value="<?= $name ?>" name="name" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giá</label>
                <input type="text" class="form-control" required value="<?= $gia ?>" name="gia" id="exampleInputPassword1" placeholder="Nhập vào giá gốc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giá giảm</label>
                <input type="text" class="form-control" required value="<?= $gia_giam ?>" name="gia_giam" id="exampleInputPassword1" placeholder="Nhập vào giá giảm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mo_ta" id="" cols="30" rows="10"><?= $mo_ta ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hình ảnh</label>
                <input type="file" name="hinh_anh" id="exampleInputPassword1">
                <img style="width:100px;height:150px;" src="../../../public/images/<?= $hinh_anh ?>" alt="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mặt hàng</label>
                <select name="iddm" id="">
                    <?php
                    $dm = loadall_danhmuc();
                    foreach ($dm as $row) {
                        extract($row);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>
