<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{
    /**
     * Show index view.
     *
     */
    public function showWelcome()
    {

        return view('welcome');
    }
}