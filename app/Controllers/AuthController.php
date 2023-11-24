<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        //
    }
    public function login()
    {
        $data = [
            'config' => config('Auth'),
        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        return view('auth/register');
    }
}
