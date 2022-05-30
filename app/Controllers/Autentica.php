<?php

namespace App\Controllers;

use App\Models\Usuario;

class Autentica extends BaseController {

    public function index() {

        //teste git
        //$model = new \App\Models\Usuario();
        $session = session();

        $login = $this->request->getVar('login');
        $password = $this->request->getVar('password');
        $data = (new Usuario())->where('login', $login)->first();

        if ($data) {

            $hash = $data['senha'];
            if (password_verify($password, $hash)) {

                session()->set('isLoggedIn', true);
                    
                $session_data = [
                    'login' => $data['login'],
                ];
                $session->set($session_data);
                return redirect()->to('/dashboard');
            } else {


                $session->setFlashdata('msg', 'Login ou senha incorretos');
                return redirect()->to('login');
                  
            }
        } else {
            
            $session->setFlashdata('msg', 'Login ou senha incorretos');
            return redirect()->to('login');
           
            
        }
        
    }

    
    //--------------------------------------------------------------------
}
