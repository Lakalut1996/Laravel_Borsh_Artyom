<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        //dd($this->getNews()); //Сокращенно от dump но завершает работу
        return view('news/index');
    }

    public function categories()
    {
        //dd($this->getСategories());
        $categories = $this->getСategories();
        return view('news/categories', [
            'categoriesList' => $categories
        ]);
    }

    public function news(string $categories)
    {
        $news = $this->getNews($categories);

        //dump($news);

        //return view('news/news');

        return view('news/news', [
            'newsList' => $news
        ]);
    }
}
