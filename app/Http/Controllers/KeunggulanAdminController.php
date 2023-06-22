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
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $file = $request->file('file')->store('keunggulan');

        $response = $client->post('https://api-sehebatnusa.smdev-staging.web.id/api/tambahKeunggulan', [
            'headers' => [
                'Authorrization' => 'Bearer' .$token,
            ],
            'multipart' => [
                [
                    'name'=> 'judul',
                    'contents' =>  $judul,
                ],
                [
                    'name'=> 'deskripsi',
                    'contents' =>  $deskripsi,
                ],
                [
                     'name' => 'gambar',
                     'contents' => fopen($file->getPathname(), 'r'),
                     'filename' => $file->getClientOriginalName(),
                ]
            ],
        ]);
        $statusCode = $response->getStatusCode();
        return $response->getBody();
    }
}
