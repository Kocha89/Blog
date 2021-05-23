<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
        echo "Страница списка новостей";
    }

    public function create()
    {
        echo "Страница создание новости";
    }

    public function update()
    {
        echo "Страница изменения новости";
    }

    public function delete()
    {
        echo "Роут удаления новости";
    }
}