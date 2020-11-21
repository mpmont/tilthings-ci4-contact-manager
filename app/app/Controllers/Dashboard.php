<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        echo '<a href="' . site_url('auth/logout') . '">Logout</a>';
    }
}
