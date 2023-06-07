<?php

namespace App\Controllers;
use App\Models\ProductsModel;
use DateTime as GlobalDateTime;
use Faker\Core\DateTime;

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
        return view('user/core/header',$data).view('user/login').view('user/core/foot').view('user/core/footer');
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

    public function addtocart($product,$jumlah = 1)
    {
        $session = session();
        if(empty($_SESSION['id_user'])){
            return redirect()->to(base_url().'Home/login');
        }else{
            $data = [
                "id_konsumen" => $_SESSION['id_user'],
                "id_produk" => $product,
                "jumlah" => $jumlah
            ];
            $db = db_connect();
            $builder = $db->table('cart');
            $builder->insert($data);
            
            return redirect()->to($_SESSION['_ci_previous_url']);
        }
    }

    public function remove_cart($id)
    {
        $session = session();
        $db = db_connect();
        $builder = $db->table('cart');
        $builder->where('counter', $id);
        $builder->delete();
        
        return redirect()->to($_SESSION['_ci_previous_url']);
    }
    public function checkout()
    {
        $session = session();
        if(empty($_POST)){
            return redirect()->to(base_url().'login');
        }

        if(empty($_SESSION['isLoggedIn'])){
            return redirect()->to(base_url().'login');
        }

        $model = new ProductsModel();
        if(empty($_SESSION['isLoggedIn'])){
            $data['carts'] = [];
        }else{
            $data['carts'] = $model->cart();
        }

        $data['list_item'] = $model->checkout($_POST);
        $data['alamat'] = $model->get_user_alamat($_SESSION['id_user']);
        $data['title']='WAKUTEKA - Checkout';
        return view('user/core/header',$data).view('user/core/navbar').view('user/checkout').view('user/core/foot').view('user/core/footer');
    }

    public function bayar()
    {
        $session = session();
        $invoice = "INV/".date("Ymd")."/".$_SESSION['id_user']."/".rand(100,999).rand(100,999).rand(100,999);
        $tomorrow = new GlobalDateTime(date("Y-m-d H:i:s"));
        $tomorrow->modify('+1 day');
        $data = [
            "id_konsumen" => $_SESSION['id_user'],
            "no_invoice" => $invoice,
            "tgl_pembelian" => date("Y-m-d H:i:s"),
            "tgl_limit" => $tomorrow->format('Y-m-d H:i:s'),
            "list_produk" => $_POST['list_produk'],
            "list_total" => $_POST['list_total'],
            "ekspedisi" => $_POST['ekspedisi'],
            "harga_ongkir" => $_POST['harga_ongkir'],
            "alamat" => $_POST['alamat'],
            "total_bayar" => $_POST['total_bayar'],
            "total_belanja" => $_POST['total_bayar'],
            "note" => $_POST['note'],
            "status" => 0
        ];

        $db = db_connect();
        $builder = $db->table('transaksi');
        $builder->insert($data);
        $payment_id = $db->insertID();
        
        return redirect()->to(base_url().'Home/payment/'.$payment_id);
    }
    
    public function payment($payment_id)
    {
        $session = session();
        $model = new ProductsModel();
        $data['data'] = $model->get_payment($payment_id);
        $data['title']='WAKUTEKA - Pembayaran';
        return view('user/core/header',$data).view('user/core/navbar').view('user/payment').view('user/core/foot').view('user/core/footer');
    }

    public function setting()
    {
        $session = session();
        if(empty($_SESSION['isLoggedIn'])){
            return redirect()->to(base_url().'login');
        }
        $model = new ProductsModel();
        $data['data'] = $model->get_user_details($_SESSION['id_user']);
        $data['alamat'] = $model->get_user_alamat($_SESSION['id_user']);
        $data['provinsi'] = $model->get_provinsi();
        $data['title']='WAKUTEKA - Setting';
        return view('user/core/header',$data).view('user/core/navbar').view('user/setting').view('user/core/foot').view('user/core/footer');
    }

    public function tambah_alamat()
    {
        $data = [
            "label_alamat" => $_POST['label_alamat'],
            "id_konsumen" => $_POST['id_konsumen'],
            "nama_penerima" => $_POST['nama'],
            "phone_number" => $_POST['phone'],
            "alamat" => $_POST['detail_alamat'],
            "provinsi" => $_POST['provinsi'],
            "kota" => $_POST['kota'],
            "kode_pos" => $_POST['kodepos']
        ];
        $db = db_connect();
        $builder = $db->table('alamat');
        $builder->insert($data);
        return redirect()->to(base_url().'Home/setting');
    }

    public function histori()
    {
        $session = session();
        if(empty($_SESSION['isLoggedIn'])){
            return redirect()->to(base_url().'login');
        }
        $model = new ProductsModel();
        $data['data'] = $model->get_user_history($_SESSION['id_user']);
        $data['title']='WAKUTEKA - Histori';
        return view('user/core/header',$data).view('user/core/navbar').view('user/histori').view('user/core/foot').view('user/core/footer');
    }

    public function ajax_get_kota()
    {
        $model = new ProductsModel();
        $data['data'] = $model->get_kota($_POST['id']);
        return json_encode($data);
    }

    public function ajax_get_kurir()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "origin=115&destination=".$_POST['destiny']."&weight=".$_POST['weight']."&courier=".$_POST['courier'],
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 0a69f85dab75453bc6a66e5253cf98d4"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
            return $response;
        }
    }
}
    