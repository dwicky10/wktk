<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
  protected $table = 'products';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = [
        'name', 'code', 'code_variant', 'color', 'size', 'stock',
        'category', 'sub_category', 'price', 'image', 'description', 'avail'
    ];

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