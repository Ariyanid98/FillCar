<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/index');
    }

    public function account()
    {
        return view('Admin/account');
    }

    public function lokasi()
    {
        return view('Admin/lokasi');
    }

    public function riwayat()
    {
        return view('Admin/riwayat');
    }

    public function transaksi()
    {
        return view('Admin/Transaksi');
    }

    public function detail_transaksi()
    {
        return view('Admin/detail_transaksi');
    }

    public function home()
    {
        return view('Admin/home');
    }

    public function message()
    {
        return view('Admin/message');
    }

    public function ubahpw()
    {
        return view('Admin/ubahpw');
    }

    public function actionreset()
    {
        $validation = [
            'password'=>'required',
            'repassword'=>'required|matches[password]'
        ];
        if(!$this->validate($validation)){
            return redirect()->to(base_url('/resetpassword'))->with('error',$this->validator->listErrors());			
        }
    }

}