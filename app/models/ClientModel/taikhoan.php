<?php
function dangnhap($email,$pass){
    $sql="SELECT * from tai_khoan where email='$email' AND pass='$pass'";
    $result=pdo_query_one($sql);
    return $result;
}

function dangkytaikhoan($name,$email,$pass){
    $sql="INSERT into tai_khoan(name,email,pass) value ('$name','$email','$pass')";
    pdo_execute($sql);
}