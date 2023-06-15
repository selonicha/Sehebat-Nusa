<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniAdminController extends Controller
{
    public function index()
    {
        return view('admin.testimoni.index');
    }
}
