<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa danh mục</h3>
    </div>
    <form action="" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" value="<?= $name ?>" name="name" placeholder="Tên danh mục">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>