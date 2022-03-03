<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function Api()
    {

        $url = "http://gateway.marvel.com/v1/public/comics?ts=1645559958&apikey=2c51d07a63ae8aead5bce5e6c1828c09&hash=1f0d7ecbb07a8d266c23e1dfe8e4d7f7";
        $resultado = json_decode(file_get_contents($url));


        return view('teste', ['resultado'=>$resultado, 'url'=>$url]);
    }
}