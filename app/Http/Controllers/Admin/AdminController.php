<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add()
    {
        //dd($this->getNews()); //Сокращенно от dump но завершает работу
        return view('news/create');
    }

    public function store(Request $request)
    {
        //dd($request->input('title'));
        dd($request->all());
        //return view('test');
    }

    // public function store(Response $response)
    // {
    //     dd($response);
    //     return view('test');
    // }
}
