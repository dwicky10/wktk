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
        $data['title']='landingpage';
        return view('user/core/header',$data).view('user/core/navbar').view('user/landingpage').view('user/core/foot').view('user/core/footer');
    }

    public function login()
    {
        $data['title']='login';
        return view('user/core/header',$data).view('user/login').view('user/core/footer');
    }

    public function register()
    {
        $data['title']='register';
        return view('user/core/header',$data).view('user/register').view('user/core/footer');
    }
    public function produk()
    {
        $data['title']='produk';
        $model = new ProductsModel();
        $data['products'] = $model->findAll();
        return view('user/core/header',$data).view('user/core/navbar').view('user/produk').view('user/core/foot').view('user/core/footer');
    }
    public function detail()
    {
        $data['title']='detail';
        return view('user/core/header',$data).view('user/core/navbar').view('user/detail').view('user/core/foot').view('user/core/footer');
    }
    public function checkout()
    {
        $data['title']='checkout';
        return view('user/core/header',$data).view('user/core/navbar').view('user/checkout').view('user/core/foot').view('user/core/footer');
    }
    public function keranjang()
    {
        $data['title']='keranjang';
        return view('user/core/header',$data).view('user/core/navbar').view('user/keranjang').view('user/core/foot').view('user/core/footer');
    }
}
    