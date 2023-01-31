<?php

namespace App\Models;

use CodeIgniter\Model;

class BidangModel extends Model
{
    protected $table      = 'bidang';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';

    protected $allowedFields = [
        'nama',
        'id'
    ];
    // function editBidang()
    // {
    //     $id = $this->request->getPost('id');
    //     $bidang = $this->request->getPost('nama');

    //     $sql = "UPDATE bidang SET nama= '$bidang' WHERE id='$id'";
    // }
}