<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard(){
        $user = User::find(auth()->user()->id);
        return view('initial-page', ['user' => $user]);
    }
}
