<?php

namespace App\Models;

use CodeIgniter\Model;

class CapaianModel extends Model
{
    protected $table      = 'capaian';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'idUnit', 'idBidang', 'idIndikator', 'tahun', 'program', 'target', 'capaian', 'link', 'idInovasi', 'status', 'hambatan', 'crd', 'mdd'
    ];
    function getAll()
    {
        $builder = $this->db->table('capaian');
        $builder->join('bidang', 'bidang.id = capaian.idBidang');
        $builder->join('indikator', 'indikator.id_indikator = capaian.idIndikator');
        $query = $builder->get();
        return $query->getResult();
    }
}