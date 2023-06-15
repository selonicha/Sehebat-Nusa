<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HewanQurbanAdminController extends Controller
{
    public function index()
    {
        return view('admin.hewanQurban.index');
    }
}
