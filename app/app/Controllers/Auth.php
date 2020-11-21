<?php namespace App\Controllers;

class Auth extends \IonAuth\Controllers\Auth
{

    public function index()
    {
        if (!$this->ionAuth->loggedIn()) {
            // redirect them to the login page
            return redirect()->to('/auth/login');
        } else {
            return redirect()->to('/dashboard');
        }
    }

}
