<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/headview');
        echo view('front/navbarview');
        echo view('front/Principal_ulti');
        echo view('front/footerview');
    }
    
    public function about_us()
    {
        echo view('front/headview');
        echo view('front/navbarview');
        echo view('front/aboutUs');
        echo view('front/footerview');
    }

    public function acerca_de()
    {
        echo view('front/headview');
        echo view('front/navbarview');
        echo view('front/acercaDe');
        echo view('front/footerview');
    }

    public function register()
    {
        echo view('front/headview');
        echo view('front/navbarview');
        echo view('front/register');
        echo view('front/footerview');
    }

    public function login()
    {
        echo view('front/headview');
        echo view('front/navbarview');
        echo view('front/login');
        echo view('front/footerview');
    }
    
    public function catalog()
    {
        echo view('front/headview');
        echo view('front/navbarview');
        echo view('front/catalog');
        echo view('front/footerview');
    }
}
