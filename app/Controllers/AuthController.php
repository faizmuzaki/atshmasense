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
        if (logged_in()) {
            return redirect()->to(base_url('/'));
        }
        $data = [
            'config' => config('Auth'),
        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        if (logged_in()) {
            return redirect()->to(base_url('/'));
        }
        return view('auth/register');
    }
    public function forgot()
    {
        if (logged_in()) {
            return redirect()->to(base_url('/'));
        }
        return view('auth/forgot');
    }
    public function reset()
    {
        if (logged_in()) {
            return redirect()->to(base_url('/'));
        }
        return view('auth/reset-password');
    }
}
