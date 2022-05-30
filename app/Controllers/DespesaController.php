<?php

namespace App\Controllers;

use App\Models\Despesa;
use App\Models\FornecedorModel;
use App\Models\StatusDespesa;
use App\Models\TipoPagamento;
use App\Models\CategoriaDespesa;

class DespesaController extends BaseController {

    private $despesaModel;
    private $fornecedorModel;
    private $statusDespesaModel;
    private $tipoPagamentoModel;
    private $categoriaDespesaModel;

    public function __construct() {

        $this->fornecedorModel = new FornecedorModel();
        $this->despesaModel = new Despesa();
        $this->statusDespesaModel = new StatusDespesa();
        $this->tipoPagamentoModel = new TipoPagamento();
        $this->categoriaDespesaModel = new CategoriaDespesa();
    }

    public function index() {

        $db = db_connect();
        $builder = $db->table('despesa d')
                ->select("d.id,d.descricao as desc,f.nome as fornecedor,d.valor,d.data_vencimento,s.titulo as status,s.color,t.titulo as tipo")
                ->join('fornecedor f', 'f.id = d.fornecedor_id')
                ->join('status_despesa s', 's.id = d.status_despesa_id')
                ->join('tipo_pagamento t', 't.id = d.tipo_pagamento_id');

        $query = $builder->get();

        echo view('view_home', ['tela' => 'despesa/view_listaDespesa', 'despesaLista' => $query->getResultArray()]);
    }

    public function add() {

        if ($this->request->getMethod() === 'post') {


            if (!$this->request->getPost('descricao') || !$this->request->getPost('categoria_despesa_id') ||
                    !$this->request->getPost('fornecedor_id') || !$this->request->getPost('valor') ||
                    !$this->request->getPost('tipo_pagamento_id') || !$this->request->getPost('status_despesa_id') ||
                    !$this->request->getPost('data_compra') || !$this->request->getPost('data_vencimento')
            ) {
                $data = [
                    'status' => false,
                    'msg' => "Preencha todos os campos obrigatorios!",
                ];
                return $this->response->setJSON($data);
            }



            if ($this->despesaModel->save($this->request->getPost())) {

                $data = [
                    'status' => true,
                    'msg' => "Despesa cadastrada com sucesso!",
                ];
            } else {


                $data = [
                    'status' => false,
                    'msg' => "Ocorreu um erro",
                ];
            }
            return $this->response->setJSON($data);
        } else {

            echo view('view_home', ['tela' => 'despesa/view_addDespesa.php',
                'listaFornecedor' => $this->fornecedorModel->findAll(),
                'listaCategoriaDespesa' => $this->categoriaDespesaModel->findAll(),
                'listaTipoPagamento' => $this->tipoPagamentoModel->findAll(),
                'listaStatusDespesa' => $this->statusDespesaModel->findAll(),
            ]);
        }
    }

    public function edit() {

        if ($this->request->getMethod() === 'post' && !$this->request->getPost('idDespesa')) {

            if (!$this->request->getPost('descricao') || !$this->request->getPost('categoria_despesa_id') ||
                    !$this->request->getPost('fornecedor_id') || !$this->request->getPost('valor') ||
                    !$this->request->getPost('tipo_pagamento_id') || !$this->request->getPost('status_despesa_id') ||
                    !$this->request->getPost('data_compra') || !$this->request->getPost('data_vencimento')
            ) {
                $data = [
                    'status' => false,
                    'msg' => "Preencha todos os campos obrigatorios!",
                ];
                return $this->response->setJSON($data);
            }

            if ($this->despesaModel->update($this->request->getPost('id'), $this->request->getPost())) {

                $data = [
                    'status' => true,
                    'msg' => "Despesa cadastrada com sucesso!",
                ];
            } else {


                $data = [
                    'status' => false,
                    'msg' => "Ocorreu um erro",
                ];
            }
            return $this->response->setJSON($data);
        } else {

            $db = db_connect();
            $builder = $db->table('despesa d')
                    ->select("d.id,d.descricao as desc,f.nome as fornecedor,d.valor,d.data_vencimento,"
                            . "s.titulo as status,s.color,t.titulo as tipo,d.observacao,d.categoria_despesa_id,"
                            . "d.fornecedor_id,d.tipo_pagamento_id,d.status_despesa_id,d.data_compra,d.data_vencimento")
                    ->join('fornecedor f', 'f.id = d.fornecedor_id')
                    ->join('status_despesa s', 's.id = d.status_despesa_id')
                    ->join('tipo_pagamento t', 't.id = d.tipo_pagamento_id')
                    ->where('d.id', $this->request->getPost('idDespesa'));

            $query = $builder->get();

            echo view('view_home', ['tela' => 'despesa/view_alterDespesa.php',
                'listaFornecedor' => $this->fornecedorModel->findAll(),
                'listaCategoriaDespesa' => $this->categoriaDespesaModel->findAll(),
                'listaTipoPagamento' => $this->tipoPagamentoModel->findAll(),
                'listaStatusDespesa' => $this->statusDespesaModel->findAll(),
                'despesa' => $query->getResultArray()
            ]);
        }
    }

    public function  buscaFornecedorDespesa() {
 
        $db = db_connect();
        $builder = $db->table('fornecedor f')
                ->select("f.id as id,f.nome as nome")
                ->join('fornecedor_despesa fd', 'f.id = fd.fornecedor_id')
                ->where('fd.categoria_despesa_id',$this->request->getPost('grupo_despesa_id'));
        $query = $builder->get();
        
        
        $data = [
                    'itens' => $query->getResultArray()
                    
                ];
        
         return $this->response->setJSON($data);
        
        
    }

}
