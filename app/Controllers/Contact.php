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

            $validation->getRuleGroup('contact');
            $validation->setRuleGroup('contact');
            

            

            

            if (! $validation->run()){
                return view('templates/header')
                . view('pages/contact')
                . view('templates/footer');
            }
                // $data['name'] = $this->form_input->post('name');
                return view('templates/header')
                . view('pages/contact-success')
                . view('templates/footer');
                
            

            

            
        }
}