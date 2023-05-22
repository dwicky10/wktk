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
        $data['title'] = 'WAKUTEKA - Enthusiasm meet Style';
        
        $model = new ProductsModel();
        if(empty($_SESSION['isLoggedIn'])){
            $data['carts'] = [];
        }else{
            $data['carts'] = $model->cart();
        }
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
        $session = session();
        $model = new ProductsModel();
        if($category != ""){
            $data['products'] = $model->produk_category($category);
        }else{
            $data['products'] = $model->produks(1);
        }
        
        if(empty($_SESSION['isLoggedIn'])){
            $data['carts'] = [];
        }else{
            $data['carts'] = $model->cart();
        }
        $data['title']='WAKUTEKA - Collection';
        return view('user/core/header',$data).view('user/core/navbar').view('user/produk').view('user/core/foot').view('user/core/footer');
    }

    public function products($code)
    {
        $session = session();
        $model = new ProductsModel();
        if(empty($_SESSION['isLoggedIn'])){
            $data['carts'] = [];
        }else{
            $data['carts'] = $model->cart();
        }
        $data['products'] = $model->produk_code($code);
        $data['stock'] = $model->stock_product($data['products']['0']['id_produk']);
        $data['title']='WAKUTEKA - Detail '.$data['products']['0']['name'];
        return view('user/core/header',$data).view('user/core/navbar').view('user/detail').view('user/core/foot').view('user/core/footer');
    }
    public function checkout()
    {
        $session = session();
        
        
        if(empty($_SESSION['isLoggedIn']) and empty($_POST)){
            if($_SESSION['isLoggedIn']){
                return redirect()->to(base_url());
            }else{
                return redirect()->to(base_url().'login');
            }
        }

        $model = new ProductsModel();
        if(empty($_SESSION['isLoggedIn'])){
            $data['carts'] = [];
        }else{
            $data['carts'] = $model->cart();
        }
        $data['list_item'] = $model->checkout($_POST);
        $data['title']='WAKUTEKA - Checkout';
        return view('user/core/header',$data).view('user/core/navbar').view('user/checkout').view('user/core/foot').view('user/core/footer');
    }

    public function bayar()
    {
        # code...
    }
}
    