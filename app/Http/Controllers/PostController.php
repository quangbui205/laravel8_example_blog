<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function __construct()
    {

    }

    public function list()
    {
        print_r('list');
        die();
    }

    public function create()
    {
        print_r('create');
        die();
    }

    public function info($id)
    {
        print_r('info: ' . $id);
        die();
    }
}
