<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        /** @var view-string $viewName */
        $viewName = 'folder.view';

        return view($viewName);
    }

    public function register()
    {
        /** @var view-string $viewName */
        $viewName = 'pages.auth.register';

        return view($viewName);
    }
}
