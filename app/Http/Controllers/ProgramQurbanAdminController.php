<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramQurbanAdminController extends Controller
{
    public function index()
    {
        return view('admin.programQurban.index');
    }
}
