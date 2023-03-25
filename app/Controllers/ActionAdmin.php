<?php

namespace App\Controllers;
use App\Models\ProductsModel;

use CodeIgniter\Model;

class ActionAdmin extends BaseController
{
    public function store()
    {
        $model = new ProductsModel();
        $img       = $this->request->getFile('image');
        $filename_img   = $img->getRandomName();
        if (!$img->hasMoved()) {
            $img->move(ROOTPATH . 'public/assets/img/produk/', $filename_img, true);
        }
        $data = [
            'name' => $_POST['name'],
            'code' => $_POST['code'],
            'code_variant' => $_POST['code_variant'],
            'color' => $_POST['color'],
            'size' => $_POST['size'],
            'stock' => $_POST['stock'],
            'category' => $_POST['category'],
            'sub_category' => $_POST['sub_category'],
            'price' => $_POST['price'],
            'image' => $filename_img,
            'description' => $_POST['description'],
            'avail' => $_POST['avail'],
        ];
        $db = db_connect();
        $builder = $db->table('products');
        $builder->insert($data);
        return redirect()->to('/Admin/produk');
    }

    public function edit()
    {
    // Ambil data dari database berdasarkan id
    $model = new ProductsModel();
    $data['products'] = $model->where('id_produk', $_POST['id']);
    
    // Tampilkan view form edit data
    echo view('editproduk', $data);
    }

    public function update()
    {
    // Ambil data yang di-submit dari form edit data
    
    $data = [
        'name'          => $_POST['name'],
        'code'          => $_POST['code'],
        'code_variant'  => $_POST['code_variant'],
        'color'         => $_POST['color'],
        'size'          => $_POST['size'],
        'stock'         => $_POST['stock'],
        'category'      => $_POST['category'],
        'sub_category'  => $_POST['sub_category'],
        'price'         => $_POST['price'],
        'description'   => $_POST['description'],
        'avail'         => $_POST['avail'],
    ];
    $db = db_connect();
    $builder = $db->table('products');
    $builder->where('id_produk', $_POST['id']);
    $builder->update($data);
    return redirect()->to('/Admin/produk');
    }

}
    