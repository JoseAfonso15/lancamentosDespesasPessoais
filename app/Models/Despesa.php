<?php

namespace App\Models;

use CodeIgniter\Model;

class Despesa extends Model
{
    protected $table = 'despesa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['descricao', 'valor','fornecedor_id','categoria_despesa_id','tipo_pagamento_id','status_despesa_id','data_compra','data_vencimento','observacao'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    
    protected $skipValidation = false;
    
   
    
    
   
}
