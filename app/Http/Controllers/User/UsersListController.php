<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UsersListController extends Controller
{
    public function __construct()
    {

    }

    public function __invoke()
    {
        return view('panel.users.index');
    }
}
