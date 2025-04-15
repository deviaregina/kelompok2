<?php

namespace App\Controllers;

class MenuController extends BaseController
{
    public function training()
    {
        return view('menu/training');
    }

    public function mall()
    {
        return view('menu/mall');
    }

    public function berita()
    {
        return view('menu/berita');
    }

    public function member()
    {
        return view('menu/member');
    }

    public function pusatSaya()
    {
        return view('menu/pusat_saya');
    }
}
