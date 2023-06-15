<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LoginAdminController extends Controller
{
    public function login(Request $request)
    {
        $client = new Client();

        $response = $client->post('https://api-sehebatnusa.smdev-staging.web.id/api/auth/login', [
            'form_params' => [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]
        ]);
        $statusCode = $response->getStatusCode();
        $content = $response->getBody()->getContents();

        if ($statusCode = 200) {
            return redirect('admin/dashboard');
        } else {
            return redirect('admin');
        }
    }
};
