<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faqindex()
    {
        echo "Страница списка вопросов";
    }

    public function faqcreate()
    {
        echo "Страница создание нового вопроса";
    }

    public function faqupdate()
    {
        echo "Страница изменения вопроса";
    }

    public function faqdelete()
    {
        echo "Роут удаления вопроса";
    }
}