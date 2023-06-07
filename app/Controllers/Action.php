<?php

namespace App\Controllers;

use CodeIgniter\Model;

class Action extends BaseController
{
    public function login()
    {
        $model = new \App\Models\ActionModel();
        $user = $model->cek_username($_POST['username']);
        // echo "<pre>";
        // print_r($user);exit();
        // cek username
        if (empty($user)) {
            return redirect()->to(base_url().'Home/login?status=usertidakditemukan');

        } else {
            // cek password
            if (password_verify($_POST['password'], $user[0]['password'])) {
                $session = session();
                $data = [
                    'id_user' => $user[0]['id_user'],
                    'username' => $user[0]['username'],
                    'name' => $user[0]['name'],
                    'level' => $user[0]['level'],
                    'isLoggedIn' => true
                ];
                $session->set($data);
                return redirect()->to(base_url());
            } else {
                return redirect()->to(base_url().'Home/login?status=passwordsalah');

            }
        }
        // tambah session
        // redirect
    }

    public function register()
    {
        $db = db_connect();

        $data1 = [
            "name" => $_POST['username_register'],
            "username" => $_POST['username_register'],
            "password" => password_hash($_POST['password_register'],PASSWORD_DEFAULT),
            "level" => 2, //user
            "dt_create" => date("Y-m-d")
        ];

        $builder1 = $db->table('user');
        $builder1->insert($data1);
        $id_konsumen = $db->insertID();

        
        $data2 = [
            "id_konsumen" => $id_konsumen,
            "name" => $_POST['username_register'],
            "tanggal_lahir" => $_POST['birthday_register'],
            "gender" => $_POST['gender_register'],
            "email" => $_POST['email_register'],
            "phone" => $_POST['phone_register']
        ];

        $builder2 = $db->table('biodata');
        $builder2->insert($data2);
        
        
        return redirect()->to(base_url().'home/login?status=registration_success');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }
}
    