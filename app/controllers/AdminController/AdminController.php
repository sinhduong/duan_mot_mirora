<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        //Danh mục
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

     // SẢN PHẨM
case 'addsp':
    if (isset($_POST['addsanpham'])) {
        $name = $_POST['name'];
        $gia = $_POST['gia'];
        $gia_giam = $_POST['gia_giam'];
        $mo_ta = $_POST['mo_ta'];

        // Kiểm tra xem người dùng có tải ảnh lên không
        if ($_FILES['hinh_anh']['name'] != "") {
            $hinh_anh = basename($_FILES["hinh_anh"]["name"]);
            $target_dir = "../../../public/images/";
            $target_file = $target_dir . $hinh_anh;
            move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
        } else {
            $hinh_anh = "";
        }

        $iddm = $_POST['iddm'];
        insert_sanpham($name, $gia, $gia_giam, $mo_ta, $hinh_anh, $iddm);
        echo '<script>alert("Thêm thành công")</script>';
        echo '<script>window.location.href= "index.php?act=allsp"</script>';
    }

    $listdanhmuc = loadall_danhmuc();
    include "sanpham/addsanpham.php";
    break;

case 'allsp':
    include "sanpham/allsanpham.php";
    break;

case 'editsp':
    if (isset($_POST['capnhat'])) {
        $id = $_GET['id_edit'];
        $name = $_POST['name'];
        $gia = $_POST['gia'];
        $gia_giam = $_POST['gia_giam'];
        $mo_ta = $_POST['mo_ta'];

        if ($_FILES['hinh_anh']['name'] != "") {
            $hinh_anh = basename($_FILES["hinh_anh"]["name"]);
            $target_dir = "../../../public/images/";
            $target_file = $target_dir . $hinh_anh;
            move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
        } else {
            $hinh_anh = ""; // Hoặc giữ hình ảnh cũ
        }

        $iddm = $_POST['iddm'];
        update_sanpham($id, $name, $gia, $gia_giam, $mo_ta, $hinh_anh, $iddm);
        echo '<script>alert("Cập nhật thành công")</script>';
        echo '<script>window.location.href= "index.php?act=allsp "</script>';
    } else {
        include "sanpham/editsanpham.php";
    }
    break;

case 'delete':
    $id = $_GET['iddl']; // Sử dụng đúng tên biến 'iddl'
    delete_sanpham($id);
    echo '<script>alert("Xóa thành công")</script>';
    echo '<script>window.location.href= "index.php?act=allsp "</script>';
    break;



        default:
            include "layout/home.php";
            break;
    }
}
