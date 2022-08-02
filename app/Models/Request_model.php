<?php namespace App\Models;
use CodeIgniter\Model;
 
class Request_model extends Model
{
    protected $table = 'request';
     
    public function getRequest()
    {
        // return $this->findAll();
        
        $this->orderBy('id', 'desc');
    }

    public function saveRequest($data)
    {
        // $builder = $this->db->table($this->table);
        // return $builder->insert($data);
        $this->insert($data);
    }
 
}