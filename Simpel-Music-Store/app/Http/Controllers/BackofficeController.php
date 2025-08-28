<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function overview(){
        return view('backoffice.overview');
    }

    public function users(){
        return view ('backoffice.users');
    }
}
