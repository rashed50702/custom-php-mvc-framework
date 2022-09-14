<?php

namespace App\Http\Controllers;

use App\Core\Application;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function welcome()
    {
        $params = [
            'name' => "Rashed"
        ];
        // return Application::$app->router->renderView('welcome', $params);
        return $this->render('welcome', $params);
    }

    public function contact()
    {
        $params = [
            'name' => "Rashed"
        ];

        return $this->render('contact', $params);
    }

    public function handleContact()
    {
        return "Handling Submit";
    }
}
