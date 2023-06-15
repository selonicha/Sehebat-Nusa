<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class KeunggulanAdminController extends Controller
{
    public function index()
    {
        return view('admin.keunggulan.index');
    }

    public function create(Request $request)
    {
        $client = new Client();
        $token = session('token');

        $response = $client->post('https://api-sehebatnusa.smdev-staging.web.id/api/tambahKeunggulan', [
            'headers' => [
                'Authorrization' => 'Bearer' .$token,
            ],
            'multipart' => [
                'judul'=> $request->input('judul'),
                'deskripsi'=> $request->input('deskripsi'),
                 $gambar = 'gambar'=> $request->file('file'),
            ],
        ]);
        $statusCode = $response->getStatusCode();
        return $response->getBody();
    }
}
