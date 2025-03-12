<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->getUserByEmail($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('error', 'Password salah.');
                return redirect()->to('/auth');
            }
        } else {
            $session->setFlashdata('error', 'Email tidak ditemukan.');
            return redirect()->to('/auth');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }
}
