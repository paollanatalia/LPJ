<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard(){
        $user = User::find(auth()->user()->id);
        $role = $user->hasRole('admin');
        $role_str = '';
        if($role){
            $role_str = 'admin';
        }else{
            $role_str = 'user';
        }

        return view('dashboard', ['role_str' => $role_str]);
    }
}
