<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Request_model;
 
class Request extends Controller
{
    public function index()
    {
        $model = new Request_model();
        $data['request'] = $model->getRequest();
        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/request_view',$data);
        echo view('templates/footer');
    }
}