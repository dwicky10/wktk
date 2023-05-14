<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class Home extends BaseController
{
    public function index()
    {
        return $this->landingpage();
    }
    public function landingpage()
    {
        $session = session();
        $data['title']='WAKUTEKA - Enthusiasm meet Style';
        return view('user/core/header',$data).view('user/core/navbar').view('user/landingpage').view('user/core/foot').view('user/core/footer');
    }

    public function login()
    {
        $data['title']='WAKUTEKA - Login';
        return view('user/core/header',$data).view('user/login').view('user/core/footer');
    }

    public function register()
    {
        $data['title']='WAKUTEKA - Register';
        return view('user/core/header',$data).view('user/register').view('user/core/footer');
    }
    public function collection($category = "")
    {
        $model = new ProductsModel();
        if($category != ""){
            $data['products'] = $model->produk_category($category);
        }else{
            $data['products'] = $model->findAll();
        }
        $data['title']='WAKUTEKA - Collection';
        return view('user/core/header',$data).view('user/core/navbar').view('user/produk').view('user/core/foot').view('user/core/footer');
    }

    public function products($code)
    {
        $model = new ProductsModel();
        $data['products'] = $model->produk_code($code);
        $data['stock'] = $model->stock_product($data['products']['0']['id_produk']);
        $data['title']='detail';
        return view('user/core/header',$data).view('user/core/navbar').view('user/detail').view('user/core/foot').view('user/core/footer');
    }
    public function checkout()
    {
        // if(empty($_SESSION['isLoggedIn'])){
        //     return redirect()->to(base_url().'login');
        // }
        $data['title']='checkout';
        return view('user/core/header',$data).view('user/core/navbar').view('user/checkout').view('user/core/foot').view('user/core/footer');
    }
    public function keranjang()
    {
        $data['title']='keranjang';
        return view('user/core/header',$data).view('user/core/navbar').view('user/keranjang').view('user/core/foot').view('user/core/footer');
    }
}
    