<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productindex()
    {
        echo "Страница списка товаров";
    }

    public function productcreate()
    {
        echo "Страница создание нового товара";
    }

    public function productupdate()
    {
        echo "Страница изменения товара";
    }

    public function productdelete()
    {
        echo "Роут удаления товара";
    }
}