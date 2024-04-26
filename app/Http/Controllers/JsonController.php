<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JsonController extends Controller
{
    public function index()
    {
        $res = Http::get('https://jsonplaceholder.typicode.com/posts/1');
        $res = $res->json();

        return view('index', ['res' => $res]);
    }
}
