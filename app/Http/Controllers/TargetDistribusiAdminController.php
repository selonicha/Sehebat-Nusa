<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TargetDistribusiAdminController extends Controller
{
    public function index()
    {
        return view('admin.targetDistribusi.index');
    }
}
