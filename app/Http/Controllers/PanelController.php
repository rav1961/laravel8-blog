<?php

namespace App\Http\Controllers;

class PanelController extends Controller
{
    public function index()
    {
        /** @var view-string $viewName */
        $viewName = 'pages.panel.index';

        return view($viewName);
    }
}
