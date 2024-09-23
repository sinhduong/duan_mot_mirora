<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['adddanhmuc'])) {
                $name = $_POST['name'];
                insert_danhmuc($name);
                echo '<script>alert("Thêm thành công")</script>';
                echo '<script>window.location.href="index.php?act=alldm"</script>';
            }
            include "danhmuc/adddanhmuc.php";
            break;

        case 'alldm':
            include "danhmuc/alldanhmuc.php";
            break;

        case 'editdm':
            if (isset($_GET['id_edit'])) {
                $id = $_GET['id_edit'];
                $danhmuc = loadone_danhmuc($id);
                extract($danhmuc);
            }
            if (isset($_POST['capnhat'])) {
                $name = $_POST['name'];
                $id = $_GET['id_edit'];
                update_danhmuc($id, $name);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href="index.php?act=alldm"</script>';
            }
            include "danhmuc/editdanhmuc.php";
            break;

        case 'deletedm':
            if (isset($_GET['id_delete'])) {
                $id = $_GET['id_delete'];
                delete_danhmuc($id);
                echo '<script>alert("Xóa thành công")</script>';
                echo '<script>window.location.href="index.php?act=alldm"</script>';
            }
            break;

        default:
            include "layout/home.php";
            break;
    }
}
