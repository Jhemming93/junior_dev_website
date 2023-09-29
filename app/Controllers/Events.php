<?php
// need to test when the server is on live place
namespace App\Controllers;

class Resources extends BaseController
{ 
    public function __construct(){
        // helper(['url']);
    }

    public function index(){
        return view('templates/header')
               . view('pages/events')
               . view('templates/footer');
    }
}