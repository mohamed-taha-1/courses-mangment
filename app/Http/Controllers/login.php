<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    function login(Request $req)
    {
        $data= $req->input();
        $req->session()->put('user',$data['user']);
        return redirect('/welcome');
    }


}
