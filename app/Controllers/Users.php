<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'homepage'

        ];
        echo view('templates/v_header_user', $data);
        echo view('templates/v_sidebar_user');
        echo view('templates/v_topbar_user');
        return view('user/index');
        echo view('templates/v_footer_user');
    }
    public function registrasi()
    {
        return view('auth/register');
    }
    public function login()
    {
        return view('auth/login');
    }
}
