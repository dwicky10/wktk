<?php

namespace App\Controllers;
use App\Models\ProductsModel;

use CodeIgniter\Model;

class ActionAdmin extends BaseController
{
    public function tambah_produks(){
        // upload main image
        $img = $this->request->getFile('mainimage');
        $filename_img = $img->getRandomName();
        if (!$img->hasMoved()) {
            $img->move(ROOTPATH . 'public/assets/img/produk/', $filename_img, true);
        }

        // upload gallery
        $files = $_FILES;
        $jumlahFile = count($files['galleryimage']['name']);
        $galleryarray = "";
        for ($i = 0; $i < $jumlahFile; $i++) {
            $namaFile = uniqid() . '-' .$files['galleryimage']['name'][$i];
            $lokasiTmp = $files['galleryimage']['tmp_name'][$i];

            $galleryarray .= $namaFile.",";

            $lokasiBaru = ROOTPATH ."public/assets/img/produk/{$namaFile}";
            move_uploaded_file($lokasiTmp, $lokasiBaru);
        }

        $data = [
            "name" => $_POST['name'],
            "code" => $_POST['code_product'],
            "color" => $_POST['color'],
            "code_variant" => $_POST['code_variant'],
            "category" => $_POST['category'],
            "sub_category" => $_POST['subcategory'],
            "image" => $filename_img,
            "gallery" => substr_replace($galleryarray ,"", -1),
            "description" => $_POST['description'],
            "fl_avail" => 0
        ];

        $db = db_connect();
        $builder = $db->table('products');
        $builder->insert($data);
        return redirect()->to('/Admin/produk');
    }

    public function tambah_stok()
    {
        $session = session();
        print_r($_SESSION);
        $data = [
            "product_id" => $_POST['product_id'],
            "size" => $_POST['size'],
            "stock" => $_POST['stock'],
            "price" => $_POST['price'],
            "dt_input" => date('Y-m-d'),
        ];

        $db = db_connect();
        $builder = $db->table('stock');
        $builder->insert($data);
        return redirect()->to('/Admin/produk');
    }

    public function update_stok()
    {
        $data = [
            'stock'=> $_POST['stock']
        ];
        $db = db_connect();
        $builder = $db->table('stock');
        $builder->where('counter', $_POST['counter']);
        $builder->update($data);
    }

    public function onoff_produk($id,$onoff){
        $data = [
            'fl_avail'=> $onoff
        ];
        $db = db_connect();
        $builder = $db->table('products');
        $builder->where('id_produk', $id);
        $builder->update($data);
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
    