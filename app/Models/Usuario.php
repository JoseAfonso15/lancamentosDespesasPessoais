<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $allowedFields = ['login', 'senha'];
//    protected $useTimestamps = false;
//    protected $createdField = 'created_at';
//    protected $updatedField = 'updated_at';
//    protected $deletedField = 'deleted_at';
//    protected $validationRules = [];
//    protected $validationMessages = [];
//    protected $skipValidation = false;
    
    
    
   
}
