<?php

namespace App\Controllers;

use CodeIgniter\Database\Config;
use App\Controllers\M_Barang as ControllersM_Barang;
use CodeIgniter\Controller;
use App\Models\M_Barang;

class barang extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Barang();
    }
    public function index()
    {
        $data =
            [
                'judul' => 'Data Kerusakan',
                'mlaporankerusakan' => $this->model->getAllData()
            ];

        echo view('templates/v_header_user', $data);
        echo view('templates/v_sidebar_user');
        echo view('templates/v_topbar_user');
        return view('barang/index', $data);
        echo view('templates/v_footer_user');
    }
    public function tambah()
    {
        $data = [
            'BKT' => $this->request->getPost('BKT'),
            'IsJaringan' => $this->request->getPost('IsJaringan'),
            'IsSoftware' => $this->request->getPost('IsSoftware'),
            'IsHardware' => $this->request->getPost('IsHardware'),
            'Usr_Pelapor' => $this->request->getPost('Usr_Pelapor'),
            'Keterangan_Pelapor' => $this->request->getPost('Keterangan_Pelapor'),
        ];
        $success = $this->model->tambah($data);
        if ($success) {
            return redirect()->to('barang/index');
        }
    }
    public function create()
    {
        $data = [
            'judul' => 'Form Tambah Data'
        ];

        return view('barang/create', $data);
    }
    public function tambah2($ID)
    {
        $this->model->update($ID, [
            'BKT' => $this->request->getPost('BKT'),
            'IsJaringan' => $this->request->getPost('IsJaringan'),
            'IsSoftware' => $this->request->getPost('IsSoftware'),
            'IsHardware' => $this->request->getPost('IsHardware'),
            'Usr_Pelapor' => $this->request->getPost('Usr_Pelapor'),
            'Keterangan_Pelapor' => $this->request->getPost('Keterangan_Pelapor'),
            'Usr_Teknisi' => $this->request->getPost('Usr_Teknisi'),
            'Tgl_Penanganan' => $this->request->getPost('Tgl_Penanganan'),
            'Keterangan_Teknisi' => $this->request->getPost('Keterangan_Teknisi'),
            'IsFinish' => $this->request->getPost('IsFinish'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('barang/index');
    }
    public function create2($ID)
    {
        $data = [
            'judul' => 'Form Penanganan Data',
            'barang' => $this->model->getBarang($ID)
        ];
        //echo view('templates/v_header', $data);
        //echo view('templates/v_sidebar');
        //echo view('templates/v_topbar');
        return view('barang/create2', $data);
        //echo view('templates/v_footer');
    }
    public function tambahedit($ID)
    {
        $this->model->update($ID, [
            'BKT' => $this->request->getPost('BKT'),
            'IsJaringan' => $this->request->getPost('IsJaringan'),
            'IsSoftware' => $this->request->getPost('IsSoftware'),
            'IsHardware' => $this->request->getPost('IsHardware'),
            'Usr_Pelapor' => $this->request->getPost('Usr_Pelapor'),
            'Keterangan_Pelapor' => $this->request->getPost('Keterangan_Pelapor'),
            'Usr_Teknisi' => $this->request->getPost('Usr_Teknisi'),
            'Tgl_Penanganan' => $this->request->getPost('Tgl_Penanganan'),
            'Keterangan_Teknisi' => $this->request->getPost('Keterangan_Teknisi'),
            'IsFinish' => $this->request->getPost('IsFinish'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('barang/index');
    }
    public function edit($ID)
    {
        $data = [
            'judul' => 'Form Ubah Data',
            'barang' => $this->model->getBarang($ID)
        ];
        //echo view('templates/v_header', $data);
        //echo view('templates/v_sidebar');
        //echo view('templates/v_topbar');
        return view('barang/edit', $data);
        //echo view('templates/v_footer');
    }
    public function teknisi()
    {
        $data = [
            'judul' => 'Teknisi',
            'barang' => $this->model->getAllData()

        ];
        echo view('templates/v_header_user', $data);
        echo view('templates/v_sidebar_user');
        echo view('templates/v_topbar_user');
        return view('barang/teknisi', $data);
        echo view('templates/v_footer_user');
    }
    public function status()
    {
        $data = [
            'judul' => 'Status',
            'barang' => $this->model->getAllData()

        ];
        echo view('templates/v_header_user', $data);
        echo view('templates/v_sidebar_user');
        echo view('templates/v_topbar_user');
        return view('barang/status', $data);
        echo view('templates/v_footer_user');
    }
    public function detail($ID)
    {

        $data = [
            'title' => 'Detail Laporan',
            'barang' => $this->model->getBarang($ID)
        ];
        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Laporan Tidak ditemukan');
        }
        return view('barang/detail', $data);
    }
    public function detail_status($ID)
    {

        $data = [
            'title' => 'Detail Laporan',
            'barang' => $this->model->getBarang($ID)
        ];
        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Laporan Tidak ditemukan');
        }
        return view('barang/detail_status', $data);
    }
    public function delete($ID)
    {
        $this->model->delete($ID);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('barang/status');
    }
}
