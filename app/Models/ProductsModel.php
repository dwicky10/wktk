<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
  public function produks()
  {
    $query = "SELECT * FROM `products` LEFT JOIN `stock` ON stock.product_id = products.id_produk";
    $db = db_connect();
    $result = $db->query($query);
    return $result->getResultArray();
  }

  public function tambah_produks()
  {
    /*
      nama
      code(auto)
      color
      variant
      category
      sub
      image
      gallery
      desc
      avail

      size
      stock
      price
      dt_input
      id_input **/ 

      
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
}