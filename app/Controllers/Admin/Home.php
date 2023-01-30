<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AkunModel;
use App\Models\UnitModel;
use App\Models\BidangModel;
use App\Models\CapaianModel;
use App\Models\IndikatorModel;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    //view utama login admin
    public function akun()
    {

        $data = [
            'title' => 'Admin - Akun'
        ];
        return view('admin/akun', $data);
    }
    public function indikator()
    {
        $indikators = new IndikatorModel();
        $indikator = $indikators->getAll();
        return view('admin/indikator', [
            'indikator' => $indikator,
            'title' => 'DINSA - Admin - Indikator'
        ]);
    }
    public function capaian()
    {
        $data = new CapaianModel();
        $capaian = $data->getAll();
        return view('admin/capaian', [
            'capaian' => $capaian,
            'title' => 'DINSA - Admin - Capaian'
        ]);
    }
    public function bidang()
    {
        $data = new BidangModel();
        $bidang = $data->findAll();
        return view('admin/bidang', [
            'bidang' => $bidang,
            'title' => 'DINSA - Admin - Bidang'
        ]);
    }
    //end view utama login admin
}