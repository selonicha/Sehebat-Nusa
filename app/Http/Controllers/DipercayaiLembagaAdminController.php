<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DipercayaiLembagaAdminController extends Controller
{
    public function index()
    {
        return view('admin.trust.index');
    }
}
