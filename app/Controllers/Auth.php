<?php




namespace App\Controllers;

use CodeIgniter\Shield\Controllers\ActionController;
use CodeIgniter\Config\Factories;



class Auth extends BaseController{

        public function index(){}

        public function login(){



            $authModel = Factories::models('AuthModel');

            return view('templates/header')
            . view('auth/login')
            . view('templates/footer');
        }

        public function register(){

            return view('templates/header')
            . view('auth/register')
            . view('templates/footer');

        }
        public function magiclink(){

            return view('templates/header')
            . view('auth/magic_link_form')
            . view('templates/footer');

        }

}