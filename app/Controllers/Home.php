<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (logged_in()) {
            if (in_groups('admin')) {
                return redirect()->to(base_url('/admin'));
            } else if (in_groups('user')) {
                return redirect()->to(base_url('/user'));
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
