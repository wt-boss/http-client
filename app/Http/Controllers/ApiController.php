<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(){
        $response = Http::get('http://example.com');
        dd($response->json);

        return view('test');
    }
}
