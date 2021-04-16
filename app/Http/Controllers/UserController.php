<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    public function index()
    {
//        $user = new User();
//        $user->name = 'junior';
//        $user->email = 'junior@jr.com';
//        $user->password = 'password';
//        $user->save();
//
        $user = User::all();
        return $user;



    }
    public function uploadAvatar()
    {

    }
}
