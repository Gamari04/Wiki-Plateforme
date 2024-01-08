<?php

namespace App\controller;

class Home
{
    public function index()
    {
        include_once __DIR__ . '/../../views/index.php';
        exit();
    }
}