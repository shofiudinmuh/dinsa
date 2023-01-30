<?php

namespace App\Controllers\Admin;

use App\Models\BidangModel;
use App\Controllers\BaseController;
// use CodeIgniter\RESTful\ResourceController;


class Bidang extends BaseController
{
    //view add & edit bidang
    function createBidang()
    {
        return view('admin/crud/bidang/createBidang', [
            'title' => 'DINSA - Admin - Tambah Bidang'
        ]);
    }
    function edit($id)
    {
        $bidangModel = new BidangModel();
        $data = $bidangModel->where('id', $id)->first();
        return view('admin/crud/bidang/editBidang', [
            'title' => 'DINSA - Admin - Edit Bidang',
            'bidang' => $data
        ]);
    }
    //simpan input
    public function saveBidang()
    {
        $bidangModel = new BidangModel();
        $data = $this->request->getPost();
        $bidangModel->insert($data);
        return redirect('admin/bidang')->with('success', 'Data berhasil disimpan');
    }

    public function bidang_update($id)
    {
        $bidangModel = new BidangModel();
    }
}