<?php

namespace App\Controllers;

class Contact extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    { 
            return view('templates/header')
            . view('pages/contact')
            . view('templates/footer');
        }
}