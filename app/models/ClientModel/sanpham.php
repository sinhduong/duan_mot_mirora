<?php
    // Load all sản phẩm mới nhất (home)
   function all_sanpham(){
      $sql="SELECT * from san_pham ORDER BY id DESC";
      $result=pdo_query($sql);
      return $result;
   }
   function all_sanpham_giam(){
      $sql="SELECT * from san_pham  order by id asc";
      $result=pdo_query($sql);
      return $result;
   }
   function all_sanpham_ban_chay(){
      $sql="SELECT * from san_pham  order by gia desc";
      $result=pdo_query($sql);
      return $result;
   }
   function all_sanpham_dat(){
      $sql="SELECT * from san_pham  order by gia asc";
      $result=pdo_query($sql);
      return $result;
   }
   
   function sp_theo_dm($iddm){
        $sql="SELECT * from san_pham WHERE iddm = '$iddm'";
        $result=pdo_query($sql);
        return $result;
    }


   function all_ct_sanpham(){
      $sql="SELECT * FROM san_pham";
      $result=pdo_query($sql);
      return $result;
   }
   
    // Load sản phẩm chi tiết 
    function load_one_spct($id){
      $sql="SELECT * FROM san_pham WHERE id = $id";
      $result = pdo_query_one($sql);
      return $result;
   }
   function product_detail($id) {
      $sql = "SELECT * FROM san_pham WHERE id = $id";
      $result = pdo_query($sql);
      return $result;
  }
?>