<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class UserController extends Controller
{
    /**
     * Show index view.
     *
     */
    public function showAdmin()
    {
        return view('admin');
    }
}