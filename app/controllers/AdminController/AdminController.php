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

        case 'deletesp':
            $id = $_GET['iddl']; // Sử dụng đúng tên biến 'iddl'
            delete_sanpham($id);
            echo '<script>alert("Xóa thành công")</script>';
            echo '<script>window.location.href= "index.php?act=allsp "</script>';
            break;

            //TÀI KHOẢN

        case 'alltaikhoan':
            include "taikhoan/alltaikhoan.php";
            break;
            case 'edittk':
                include "taikhoan/edittaikhoan.php";
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id_edit'];
                    $name = $_POST['name'];
                    $ho_ten = $_POST['ho_ten'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
            
                    if ($_FILES['avt']['name'] != "") {
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);
                    } else {
                        $avt = "";
                    }
            
                    $pass = $_POST['pass'];
                    $phone = $_POST['phone'];
            
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['vai_tro'])) {
                        $id = $_POST['id'];
                        $vai_tro = $_POST['vai_tro'];
            
                        // Cập nhật vai trò trong cơ sở dữ liệu
                        $sql = "UPDATE tai_khoan SET vai_tro = :vai_tro WHERE id = :id";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(['vai_tro' => $vai_tro, 'id' => $id]);
            
                        // Thông báo cập nhật vai trò thành công
                        echo '<script>alert("Cập nhật vai trò thành công!");</script>';
                        echo '<script>window.location.href="index.php?act=alltaikhoan";</script>';
                        exit();
                    }
            
                    update_taikhoan($id, $name, $ho_ten, $email, $dia_chi, $avt, $pass, $phone, $vai_tro);
                    echo '<script>alert("Cập nhật thành công");</script>';
                    echo '<script>window.location.href="index.php?act=alltaikhoan";</script>';
                }
                break;

        case 'deletetk':
            $id = $_GET['iddl'];
            delete_taikhoan($id);
            echo '<script>alert("Xóa tài khoản thành công")</script>';
            echo '<script>window.location.href="index.php?act=alltaikhoan"</script>';
            break;


        default:
            include "layout/home.php";
            break;
    }
}
