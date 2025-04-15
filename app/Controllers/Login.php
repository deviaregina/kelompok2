<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Hardcoded user (tanpa database)
        if ($email === 'user@example.com' && $password === '123456') {
            session()->set([
                'user_name' => 'Depa Mulyadi',
                'isLoggedIn' => true
            ]);
            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Email atau password salah!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
