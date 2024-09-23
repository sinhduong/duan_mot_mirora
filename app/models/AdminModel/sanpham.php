<?php
function insert_sanpham($name,$gia,$gia_giam,$mo_ta,$hinh_anh,$iddm)
{
    $sql = "INSERT INTO `san_pham`( `name`, `gia`,`gia_giam`, `mo_ta`, `hinh_anh`, `iddm`) VALUES ('$name','$gia','$gia_giam','$mo_ta','$hinh_anh','$iddm')";
    pdo_execute($sql);
}
function loadall_sanpham(){
    $sql="SELECT * ,san_pham.id as id_sp,danh_muc.name as name_dm, san_pham.name as name_sp FROM `san_pham` 
    join danh_muc ON san_pham.iddm = danh_muc.id";
    $result=pdo_query($sql);
    return $result;
}
function edit_sanpham($id,$name,$gia,$gia_giam,$mo_ta,$hinh_anh,$iddm){
    $sql="UPDATE `san_pham` SET `name`='$name',`gia`='$gia',`gia_giam`='$gia_giam',`mo_ta`='$mo_ta',`hinh_anh`='$hinh_anh',`iddm`='$iddm' WHERE id='$id'";
    pdo_execute($sql);
}
function update_sanpham($id,$name,$gia,$gia_giam,$mo_ta,$hinh_anh,$iddm){
    $sql="UPDATE `san_pham` SET `name`='$name',`gia`='$gia',`gia_giam`='$gia_giam',`mo_ta`='$mo_ta',`hinh_anh`='$hinh_anh',`iddm`='$iddm' WHERE id='$id'";
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