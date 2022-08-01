<?php namespace App\Models;
use CodeIgniter\Model;
 
class Master_store_model extends Model
{
    protected $table = 'ms_store';
     
    public function pencarian($kunci) {
        return $this->table('ms_store')->like('kode_toko', $kunci);
    }

     
}