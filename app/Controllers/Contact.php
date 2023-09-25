<?php

namespace App\Controllers;

class Contact extends BaseController
{

    protected $helpers = ['form'];

    public function index()
    { 

            $validation = \Config\Services::validation();
            

            if (! $this->request->is('post')){
                return view('templates/header')
                . view('pages/contact')
                . view('templates/footer');
            }

            if (! $validation->run($_POST,'contact')){
                return view('templates/header')
                . view('pages/contact')
                . view('templates/footer');
            }
            
                return view('templates/header')
                . view('pages/contact-success')
                . view('templates/footer');
                
            

            

            
        }
}