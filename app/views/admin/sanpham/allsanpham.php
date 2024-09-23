<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Giá giảm</th>
                <th scope="col">Mô Tả</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Mặt hàng</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sanpham = loadall_sanpham();
            foreach ($sanpham as $row):
                extract($row);
            ?>
                <tr>
                    <th scope="row"><?= $id_sp ?></th>
                    <td><a href="index.php?act=allctsanpham"><?= $name_sp ?></a></td>
                    <td><?= $gia ?></td>
                    <td><?= $gia_giam ?></td>
                    <td><?= $mo_ta ?></td>
                    <td><img style="width:100px;height:150px;" src="../../../public/images/<?= $hinh_anh ?>" alt=""></td>
                    <td><?= $name_dm ?></td>
                    <td>
                        <a href="index.php?act=editsp&id_edit=<?= $id_sp ?>"><button class="btn btn-warning">Sửa</button></a>
                        <a href="index.php?act=delete&iddl=<?= $id_sp; ?>"><button class="btn btn-danger">Xóa</button></a>
                    </td>

                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</body>

</html>