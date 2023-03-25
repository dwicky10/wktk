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
}
