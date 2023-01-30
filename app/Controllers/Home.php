<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function akun()
    {
        $data = [
            'title' => 'DINSA - Admin - Akun'
        ];
        return view('admin/akun', $data);
    }
    public function indikator()
    {
        $data = [
            'title' => 'DINSA - Admin - Indikator'
        ];
        return view('admin/indikator', $data);
    }
    public function bidang()
    {
        $data = [
            'title' => 'DINSA - Admin - Bidang'
        ];
        return view('admin/bidang', $data);
    }
    public function capaian()
    {
        $data = [
            'title' => 'DINSA - Admin - Capaian'
        ];
        return view('admin/capaian', $data);
    }
}