<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
  public function produks($group = "")
  {
    if($group != ""){
      $group = "WHERE products.fl_avail=1 GROUP BY products.id_produk ";
    }
    $query = "SELECT * FROM `products` LEFT JOIN `stock` ON stock.product_id = products.id_produk ".$group;
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function produk_category($category)
  {
    
    $query = "SELECT * from products where category ='".$category."'";
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function produk_code($code)
  {
    $query = "SELECT * from products where code ='".$code."'";
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function stock_product($id)
  {
    $query = "SELECT * from stock where product_id ='".$id."'";
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function cart()
  {
    $query = "SELECT
              c.counter,
              c.jumlah,

              s.counter as counter_stock,
              s.size,
              s.price,

              p.name,
              p.color,
              p.image,
              p.code,
              p.fl_avail

              FROM `cart` c
              INNER JOIN `stock` s ON c.id_produk = s.counter
              INNER JOIN `products` p ON s.product_id = p.id_produk
              WHERE id_konsumen = ".$_SESSION['id_user']." and p.fl_avail = 1";

    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function checkout($data)
  {
    $db = db_connect();
    
    $ret = [];
    foreach($data['id_product'] as $key => $value){
      $query = "SELECT
                  s.counter,
                  s.size,
                  s.price,

                  p.name,
                  p.color,
                  p.image,
                  '".$data['total'][$key]."' as jumlah

                  FROM `stock` s
                  INNER JOIN `products` p ON s.product_id = p.id_produk
                  WHERE s.counter = ".$value;
      $result = $db->query($query);
      array_push($ret,$result->getResultArray());
    }
    return $ret;
  }

  public function get_payment($id)
  {
    $query = "SELECT * from transaksi where id_transaksi ='".$id."'";
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function get_user_details($id)
  {
    $query = "SELECT * from biodata where id_konsumen ='".$id."'";
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function get_provinsi()
  {
    $query = "SELECT * from tb_ro_provinces";
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function get_kota($id)
  {
    $query = "SELECT * from tb_ro_cities WHERE province_id = ".$id;
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function get_user_alamat($id)
  {
    $query = "SELECT a.*,
              pro.province_name,
              cit.city_name
              FROM alamat a 
              INNER JOIN tb_ro_provinces pro ON pro.province_id = a.provinsi
              INNER JOIN tb_ro_cities cit ON cit.city_id = a.kota WHERE a.id_konsumen ='".$id."'";
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function get_user_history($id)
  {
    $query = "SELECT * FROM transaksi WHERE id_konsumen ='".$id."'";
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }
}