<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = new User();


        User::create(
            [
                'name' => 'junior',
                'email' => 'junior@jr.com',
                'password' => 'password',
            ]);


    }
}
