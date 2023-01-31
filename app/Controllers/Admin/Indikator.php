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
    protected $indikatorModel;
    protected $bidangModel;
    public function __construct()
    {
        $this->indikatorModel = new indikatorModel();
        $this->bidangModel = new BidangModel();
    }
    //view edit & tambah indikator
    function createIndikator()
    {
        $data = $this->bidangModel->findAll();
        return view('admin/crud/indikator/createIndikator', [
            'title' => 'DINSA - Admin - Tambah Indikator',
            'bidang' => $data
        ]);
    }
    function editIndikator($id)
    {
        $bidang = $this->bidangModel->findAll();
        $indikator = $this->indikatorModel->find($id);
        // dd($indikator);
        return view('admin/crud/indikator/editIndikator', [
            'title' => 'DINSA - Admin - Edit Indikator',
            'indikator' => $indikator, //return nilai dari id terpilih
            'bidang' => $bidang  //return nilai dropdown input bidang
        ]);
    }
    //end view edit & tambah indikator

    //simpan indikator baru
    function simpan()
    {
        $data = $this->request->getPost();
        $this->indikatorModel->insert($data);
        return redirect('admin/indikator')->with('success', 'Data berhasil disimpan');
    }
    //edit indikator
    function updateIndikator($id)
    {
        //
    }
    //delete indikator
    public function delete($id)
    {
        $this->indikatorModel->where('id', $id)->delete();
        return redirect('admin/indikator')->with('success', 'Data berhasil dihapus');
    }
}