<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class registerController extends Controller
{
    public function __invoke(Request $request){
        $userData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']

        ]);
        $userData['password'] = bcrypt($userData['password']);
        $user = User::create($userData);

        return redirect()->route('site.home');
    }
}
