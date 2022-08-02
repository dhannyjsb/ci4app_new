<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Request_model;
use App\Models\RequestModel;

class Request extends Controller
{
    public function index()
    {
        $model = new RequestModel();
        $data['request'] = $model->getData();
        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/tambah_data', $data);
        echo view('templates/footer');
    }

    // public function addrequest()
    // {
    //     $model = new Request_model();
    //     $data['request'] = $model->getRequest();
    //     echo view('templates/header');
    //     echo view('templates/navbar');
    //     echo view('pages/tambah_data',$data);
    //     echo view('templates/footer');
    // }

    public function add()
    {
        $model = new RequestModel();
        $today =  date('d-m-Y');
        $data = array(

            'kode_toko'     => $this->request->getPost('kode_toko'),
            'nama_toko'     => $this->request->getPost('nama_toko'),
            'nik'           => $this->request->getPost('nik'),
            'nama'          => $this->request->getPost('nama'),
            'nama_request'  => $this->request->getPost('nama_request'),
            'tgl_request'   => $today,
            'status'        => 'PROCESS'
        );

        $model->saveData($data);
        echo '<script>
                alert("Request Anda Sedang Diproses");
                window.location="' . base_url('/request') . '"
            </script>';
    }
}
