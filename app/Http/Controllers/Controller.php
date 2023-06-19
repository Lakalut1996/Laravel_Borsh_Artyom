<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getСategories()
    {
        $categories = ['game', "soft", "technology", "other"];
        return ($categories);
    }

    public function getNews(string $categories)
    {
        $news = [];
        $news[] = [
            'category' => 'game',
            'autor' => 'Art',
            'header' => 'News1',
            'txt' => 'Text1'
        ];
        $news[] = [
            'category' => 'game',
            'autor' => 'Art',
            'header' => 'News2',
            'txt' => 'Text11'
        ];
        $news[] = [
            'category' => 'soft',
            'autor' => 'Nor',
            'header' => 'News1',
            'txt' => 'Text2'
        ];
        $news[] = [
            'category' => 'soft',
            'autor' => 'Nor',
            'header' => 'News1',
            'txt' => 'Text22'
        ];
        $news[] = [
            'category' => 'technology',
            'autor' => 'Ror',
            'header' => 'News1',
            'txt' => 'technologyText'
        ];
        $news[] = [
            'category' => 'other',
            'autor' => 'Sor',
            'header' => 'News1',
            'txt' => 'otherText22'
        ];

        // Филтруем массив новостей и добавляем только нужную категорию
        $filtr = [];
        switch ($categories) {
            case 'game':
                foreach ($news as $key => $value) {
                    if ($value['category'] == 'game') {
                        $filtr[] = $value;
                    }
                }
                break;

            case 'soft':
                foreach ($news as $key => $value) {
                    if ($value['category'] == 'soft') {
                        $filtr[] = $value;
                    }
                }
                break;
            case 'technology':
                foreach ($news as $key => $value) {
                    if ($value['category'] == 'technology') {
                        $filtr[] = $value;
                    }
                }
                break;
            case 'other':
                foreach ($news as $key => $value) {
                    if ($value['category'] == 'other') {
                        $filtr[] = $value;
                    }
                }
                break;

            default:
                return ($news);
                break;
        }

        return ($filtr);
    }
}
