<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelAdminController extends Controller
{
    public function index()
    {
        return view('admin.artikel.index');
    }
}
