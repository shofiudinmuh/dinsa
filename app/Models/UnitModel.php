<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitModel extends Model
{
    protected $table      = 'm_unit';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'kode_unit', 'induk_unit', 'nama_unit', 'nama_singkat', 'jenis_unit', 'program_pendidikan',
        'no_sk_dikti', 'tgl_sk_dikti', 'tgl_akhir_sk', 'tgl_berdiri', 'no_sk_ban_pts', 'akreditasi', 'tgl_sk_akreditasi',
        'kode_prodi_epsbed', 'kode_fak_epsbed', 'ketua', 'sekretaris', 'nama_operator', 'telp_operator', 'alamat', 'kode_pos',
        'telp_prodi', 'fax', 'email', 'homepage', 'boleh_dipilih', 'is_kantorpusat', 'status'
    ];
}