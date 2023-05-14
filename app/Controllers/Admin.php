<?php

namespace App\Controllers;

use CodeIgniter\Model;
use App\Models\ProductsModel;

class Admin extends BaseController
{
    public function index()
    {
        return $this->dashboard();

    }

    public function dashboard()
    {
        $session = session();
        $data['title']='dashboard';
        return view('admin/core/header',$data).view('admin/core/navbar').view('admin/core/sidebar').view('admin/dashboard').view('admin/core/footer');
    }

    public function produk()
    {
        $data['title']='Produk';
        $model = new ProductsModel();
        $data['products'] = $model->produks();
        return view('admin/core/header',$data).view('admin/core/navbar').view('admin/core/sidebar').view('admin/produk').view('admin/core/footer');
        
    }

    public function editproduk($id)
    {
        $data['title']='editproduk';
        $model = new ProductsModel();
        $data['products'] = $model->where('id_produk', $id)->findAll();

        return view('admin/core/header',$data).view('admin/core/navbar').view('admin/core/sidebar').view('admin/editproduk').view('admin/core/footer');
    }

    public function user()
    {
        # code...
    }

    public function transaksi()
    {
        # code...
    }
}
    