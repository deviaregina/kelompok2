<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('dashboard/index', [
            'user_name' => session('user_name')
        ]);
    }
    public function editProfile()
{
    if (!session()->get('isLoggedIn')) {
        return redirect()->to('/login');
    }

    return view('dashboard/edit_profile');
}

public function updateProfile()
{
    $name = $this->request->getPost('name');

    // Simpan di session (simulasi karena tanpa database)
    session()->set('user_name', $name);

    return redirect()->to('/dashboard/edit-profile')->with('success', 'Profil berhasil diperbarui!');
}

}
