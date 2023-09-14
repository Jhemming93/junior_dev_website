<?php

namespace App\Controllers;

class Contact extends BaseController
{

    protected $helpers = ['form'];

    public function index()
    { 

            $validation = \Config\Services::validation();
            // $request    = \Config\Services::request();

            if (! $this->request->is('post')){
                return view('templates/header')
                . view('pages/contact')
                . view('templates/footer');
            }

            // $validation->getRuleGroup('contact');
            // $validation->setRuleGroup('contact');
            
            // $data = $_POST['data'];
            

            

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