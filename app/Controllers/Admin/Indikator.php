<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AkunModel;
use App\Models\UnitModel;
use App\Models\BidangModel;
use App\Models\CapaianModel;
use App\Models\IndikatorModel;
use App\Controllers\BaseController;

class Indikator extends BaseController
{
    //view edit & tambah indikator
    function createIndikator()
    {
        $bidang = new BidangModel();
        $data['bidang'] = $bidang->findAll();
        return view('admin/crud/indikator/createIndikator', [
            'title' => 'DINSA - Admin - Tambah Indikator',
            'bidang' => $data
        ]);
    }
    function editIndikator()
    {
        return view('admin/crud/indikator/editIndikator', [
            'title' => 'DINSA - Admin - Edit Indikator'
        ]);
    }
    //end view edit & tambah indikator
    function simpan()
    {
        $indikatorModel = new IndikatorModel();
        $data = $this->request->getPost();
        $indikatorModel->insert($data);
        return redirect('admin/indikator')->with('success', 'Data berhasil disimpan');
    }
}