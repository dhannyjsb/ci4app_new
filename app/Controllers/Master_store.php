<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Master_store_model;
 
class Master_store extends BaseController
{
    public function index()
    {
    	$model = new Master_store_model();
    	$kunci = $this->request->getVar('cari');

        if ($kunci) {
            $query = $model->pencarian($kunci);
        } else {
            $query = $model;
            $jumlah = "";
        }

        $data['kode_toko'] = $query;
        $data['pager'] = $model->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $data['jumlah'] = $jumlah;

        echo view('list_siswa',$data);
    }
}