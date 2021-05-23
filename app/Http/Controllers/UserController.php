<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userindex()
    {
        echo "Страница списка пользователей";
    }

    public function usercreate()
    {
        echo "Страница создание нового пользователя";
    }

    public function userupdate()
    {
        echo "Страница изменения пользователя";
    }

    public function userdelete()
    {
        echo "Роут удаления пользователя";
    }
}