<?php

namespace App\Models;

use CodeIgniter\Model;

class IndikatorModel extends Model
{
    protected $table      = 'indikator';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'idBidang', 'deskripsi', 'bentuk', 'satuan', 'jenis', 'kode_perkin', 'kode_konkin', 'hitung', 'nama'
    ];

    function getAll()
    {
        $builder = $this->db->table('indikator');
        $builder->join('bidang', 'bidang.id = indikator.idBidang');
        $query = $builder->get();
        return $query->getResult();
    }
}