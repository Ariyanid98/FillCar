<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('User/index');
    }

    public function Data_pegawai()
    {
        return view('User/Data_oegawai');
    }

    public function Data_users()
    {
        return view('User/Data_users');
    }

}