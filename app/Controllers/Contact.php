<?php
// need to test when the server is on live place
namespace App\Controllers;

class Contact extends BaseController
{

    protected $helpers = ['form'];

        

    public function index()
    { 
            
            $validation = \Config\Services::validation();
            $email = \Config\Services::email();
            $request = \Config\Services::request();
            $email->initalize();

            if (! $this->request->is('post')){
                return view('templates/header')
                . view('pages/contact')
                . view('templates/footer');
            }

            if (! $validation->run($_POST,'contact')){
                return view('templates/header')
                . view('pages/contact')
                . view('templates/footer');
            }else{

                $name = $request->getPost('name');
                $myemail = $request->getPost('email');
                $subject = $request->getPost('subject');
                $message = $request->getPost('message');
                $recipeint = 'yegjdev@gmail.com';

                $email->setFrom($myemail, $name);
                $email->setTo($recipeint);
                $email->setCC($recipeint);

                $email->setSubject($subject);
                $email->setMessage($message);

                $email->send();
                
                
                if(! $email->send()){
                   
                    $data['result'] = 'Failed';
                    
                    $data['debugger'] = $email->printDebugger();
                }else{ 
                    $data['result'] = 'Success';
                }

                return view('templates/header')
                . view('pages/contact-success', $data)
                . view('templates/footer');

            }




               
                
            

            

            
        }
}