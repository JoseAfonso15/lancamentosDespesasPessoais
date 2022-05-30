<?php

namespace App\Controllers;

use App\Models\FornecedorModel;
use App\Models\CategoriaDespesa;

class FornecedorController extends BaseController {

    private $fornecedorModel;

    public function __construct() {
        $this->fornecedorModel = new FornecedorModel();
        $this->categoriaDespesaModel = new CategoriaDespesa();
    }

    public function index() {

        echo view('view_home', ['tela' => 'fornecedor/view_listaFornecedor', 'fornecedorLista' => $this->fornecedorModel->findAll()]);
    }

    public function add() {
        if ($this->request->getMethod() === 'post') {
            if (!$this->request->getPost('nome') || !$this->request->getPost('cidade')) {
                $data = [
                    'status' => false,
                    'msg' => "Preencha todos os campos obrigatorios!",
                ];
                return $this->response->setJSON($data);
            }
            if ($this->fornecedorModel->save($this->request->getPost())) {
                $data = [
                    'status' => true,
                    'msg' => "Fornecedor cadastrado com sucesso!",
                ];
            } else {
                $data = [
                    'status' => false,
                    'msg' => "Ocorreu um erro",
                ];
            }
            return $this->response->setJSON($data);
        } else {
            $dados["tela"] = "fornecedor/view_addFornecedor.php";
            return view('view_home', $dados);
        }
    }

    public function lista() {
        $dados = [
            'nome' => 'teste nome',
            'telefone' => '14982036703',
            'cidade' => 'fartura'
        ];
        $dados['fornecedorLista'] = $dados;
        $dados ['tela'] = 'fornecedor/view_listaFornecedor';
        echo view('view_home', ['tela' => 'fornecedor/view_listaFornecedor', 'fornecedorLista' => $this->fornecedorModel->findAll()]);
    }

    public function edit() {
        if ($this->request->getMethod() === 'post' && !$this->request->getPost('idFornecedor')) {
            if (!$this->request->getPost('nome') || !$this->request->getPost('cidade')
            ) {
                $data = [
                    'status' => false,
                    'msg' => "Preencha todos os campos obrigatorios!",
                ];
                return $this->response->setJSON($data);
            }
            if ($this->fornecedorModel->update($this->request->getPost('id'), $this->request->getPost())) {
                $data = [
                    'status' => true,
                    'msg' => "Fornecedor alterado com sucesso!",
                ];
            } else {
                $data = [
                    'status' => false,
                    'msg' => "Ocorreu um erro",
                ];
            }
            return $this->response->setJSON($data);
        } else {
            echo view('view_home', ['tela' => 'fornecedor/view_AlterFornecedor.php',
                'listaFornecedor' => $this->fornecedorModel->findAll(),
                'fornecedor' => $this->fornecedorModel->find($this->request->getPost('idFornecedor')),
                'listaCategoriaDespesa' => $this->categoriaDespesaModel->findAll()
            ]);
        }
    }

}
