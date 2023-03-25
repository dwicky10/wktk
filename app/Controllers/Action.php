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

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }
}
    