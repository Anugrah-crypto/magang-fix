<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Barang extends Model
{
    protected $table = "mlaporankerusakan";
    protected $allowedFields = ['Usr_Teknisi', 'Tgl_Penanganan', 'Keterangan_Teknisi', 'IsFinish'];
    public function __construct()
    {
        $this->db = db_connect();
    }
    public function getAllData()
    {
        return $this->db->table('mlaporankerusakan')->get()->getResultArray();
    }
    public function getBarang($ID)
    {
        if ($ID == false) {
            return $this->db->table('mlaporankerusakan')->get()->getResultArray();
        }

        return $this->db->table('mlaporankerusakan')->getWhere(['ID' => $ID])->getFirstRow();
    }
    public function tambah($data)
    {

        return $this->db->table('mlaporankerusakan')->insert($data);
    }
}
