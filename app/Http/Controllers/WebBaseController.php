<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class WebBaseController extends Controller
{
    public function warning()
    {
        request()
            ->session()
            ->flash('error', 'Ошибка!');

    }

    public function added()
    {
        request()
            ->session()
            ->flash('success', 'Добавлено!');
    }

    public function inModeration()
    {
        request()
            ->session()
            ->flash('warning', "Отправлено на мoдерацию администратору сайта");
    }

    public function deleted()
    {
        request()
            ->session()
            ->flash('error', 'Удалено!');
    }

    public function successOperation()
    {
        request()
            ->session()
            ->flash('success', 'Операция успешна!');
    }

    public function edited()
    {
        request()
            ->session()
            ->flash('info', 'Обновлено!');
    }

    public function notFound()
    {
        request()
            ->session()
            ->flash('error', 'Не найдено!');
    }


    public function error()
    {
        request()
            ->session()
            ->flash('error', 'Ошибка!');
    }

    public function makeToast($type, $message)
    {
        request()
            ->session()
            ->flash($type, $message);
    }

    public function getCurrentUser()
    {
        return Auth::user();
    }

    public function getCurrentUserId()
    {
        return Auth::id();
    }

    public function getAdminBaseView($name) {
        return 'admin.contents.'.$name;
    }

}
