<?php

function loadall_taikhoan()
{
    $sql = "SELECT `id`, `name`, `ho_ten`, `email`, `dia_chi`, `avt`, `pass`, `phone`, `vai_tro` FROM `tai_khoan`";
    $result = pdo_query($sql);
    return $result;
}
function edit_taikhoan($id, $name, $ho_ten, $email, $dia_chi, $avt, $pass, $phone, $vai_tro)
{
    $sql = "UPDATE `tai_khoan` SET `name`='$name',`ho_ten`='$ho_ten',`email`='$email',`dia_chi`='$dia_chi',`avt`='$avt',`pass`='$pass',`phone`='$phone',`vai_tro`='$vai_tro' WHERE id='$id'";
    pdo_execute($sql);
}
function update_taikhoan($id, $name, $ho_ten, $email, $dia_chi, $avt, $pass, $phone, $vai_tro)
{
    $sql = "UPDATE `tai_khoan` SET `name`='$name',`ho_ten`='$ho_ten',`email`='$email',`dia_chi`='$dia_chi',`avt`='$avt',`pass`='$pass',`phone`='$phone',`vai_tro`='$vai_tro' WHERE id='$id'";
    pdo_execute($sql);
}
function select_onetk()
{
    $id = $_GET['id_edit'];
    $sql = "SELECT * FROM tai_khoan WHERE id = '$id'";
    $result = pdo_query_one($sql);
    return $result;
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM `tai_khoan` WHERE id = '$id'";
    pdo_execute($sql);
}
