<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function overview(){
        return view('backoffice.overview');
    }

    public function users(){
        return view ('backoffice.users');
    }

    public function showUser($user_id){
        $user = User::where('id', $user_id)->firstOrFail()->get();
        return view('backoffice.userShow');
    }
}
