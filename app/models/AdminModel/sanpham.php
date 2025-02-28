<?php
function insert_sanpham($name, $gia, $gia_giam, $mo_ta, $hinh_anh, $iddm, $mau_sac, $kich_thuoc, $chat_lieu, $bao_hanh)
{
    $sql = "INSERT INTO `san_pham` (`name`, `gia`, `gia_giam`, `mo_ta`, `hinh_anh`, `iddm`, `mau_sac`, `kich_thuoc`, `chat_lieu`, `bao_hanh`) 
            VALUES ('$name', '$gia', '$gia_giam', '$mo_ta', '$hinh_anh', '$iddm', '$mau_sac', '$kich_thuoc', '$chat_lieu', '$bao_hanh')";
    pdo_execute($sql);
}

function loadall_sanpham(){
    $sql = "SELECT san_pham.*, 
                   san_pham.id as id_sp, 
                   danh_muc.name as name_dm, 
                   san_pham.name as name_sp, 
                   san_pham.mau_sac, 
                   san_pham.kich_thuoc, 
                   san_pham.chat_lieu, 
                   san_pham.bao_hanh 
            FROM `san_pham`
            JOIN danh_muc ON san_pham.iddm = danh_muc.id";
    $result = pdo_query($sql);
    return $result;
}

function edit_sanpham($id,$name,$gia,$gia_giam,$mo_ta,$hinh_anh,$iddm,$mau_sac,$kich_thuoc,$chat_lieu,$bao_hanh){
    $sql="UPDATE `san_pham` SET `name`='$name',`gia`='$gia',`gia_giam`='$gia_giam',`mo_ta`='$mo_ta',`hinh_anh`='$hinh_anh',`iddm`='$iddm',`mau_sac`='$mau_sac',`kich_thuoc`='$kich_thuoc',`chat_lieu`='$chat_lieu',`bao_hanh`='$bao_hanh' WHERE id='$id'";
    pdo_execute($sql);
}
function update_sanpham($id, $name, $gia, $gia_giam, $mo_ta, $hinh_anh, $iddm, $mau_sac, $kich_thuoc, $chat_lieu, $bao_hanh) {
    $sql = "UPDATE `san_pham` 
            SET `name`='$name', 
                `gia`='$gia', 
                `gia_giam`='$gia_giam', 
                `mo_ta`='$mo_ta', 
                `hinh_anh`='$hinh_anh', 
                `iddm`='$iddm', 
                `mau_sac`='$mau_sac', 
                `kich_thuoc`='$kich_thuoc', 
                `chat_lieu`='$chat_lieu', 
                `bao_hanh`='$bao_hanh' 
            WHERE id='$id'";
    pdo_execute($sql);
}

function select_onesp(){
    $id = $_GET['id_edit'];
    $sql ="SELECT * FROM san_pham WHERE id = '$id'";
    $result = pdo_query_one($sql);
    return $result;
}
function delete_sanpham($id) {
    $sql = "DELETE FROM san_pham WHERE id = '$id'";
    pdo_execute($sql);
}

?>