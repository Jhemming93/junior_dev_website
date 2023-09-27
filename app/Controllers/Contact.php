<?php
// need to test when the server is on live place
namespace App\Controllers;

class Contact extends BaseController
{
    public function __construct() {
        helper(['form', 'url']);
    }
  
    public function index(){
        return view('templates/header')
        . view('pages/contact')
        . view('templates/footer');
    }
        

    public function sendEmail()
    { 
            
            $validation = \Config\Services::validation();
            
            $request = \Config\Services::request();

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

                $email = \Config\Services::email();

                $name = $request->getPost('name');
                $myemail = $request->getPost('email');
                $subject = $request->getPost('subject');
                $message = $request->getPost('message');

                $email->setFrom('_mainaccount@yegjuniordevs.ca');
                $email->setTo('yegjdev@gmail.com');

                $email->setSubject($subject);
                $email->setMessage($message . "<br> Sent by: " . $myemail);

                $email->send(false);
                
                
                if($email->send(false)){
                   $data['result'] = 'Success';
                }else{ 
                    $data['result'] = 'Failed';
                    $data['debugger'] = $email->printDebugger();
                }

                return view('templates/header')
                . view('pages/contact-success', $data)
                . view('templates/footer');

            }




               
                
            

            

            
        }
}