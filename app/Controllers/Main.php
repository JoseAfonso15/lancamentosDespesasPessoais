<?php

namespace App\Controllers;

class Main extends BaseController {

    public function index() {
        return view('view_login');
    }

    function dashboard()
    {
    
       return view('view_home');
    }
    
    function login()
    {
    
       return view('view_login');
    }
    
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
    //--------------------------------------------------------------------
}
