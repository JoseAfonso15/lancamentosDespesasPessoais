<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaDespesa extends Model
{
    protected $table = 'categoria_despesa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    
    protected $skipValidation = false;
   
}
