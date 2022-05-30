<?php

namespace App\Models;

use CodeIgniter\Model;

class FornecedorModel extends Model
{
    protected $table = 'fornecedor';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'telefone','cidade'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    protected $validationRules = [
        'nome'=>'required',
    //   'telefone'=>'required',
        
    ];
    protected $validationMessages = [
        'nome'=>[
            'required'=> 'O campo Nome é obrigátorio'
        ]
    ];
    protected $skipValidation = false;
   
}
