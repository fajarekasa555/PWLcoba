<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Nama: Fajar Eka Sandiyuda, NIM: 244107020043";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan Id " . $id;
    }
}
