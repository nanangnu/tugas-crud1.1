<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form(){
        return view('register');
    }

    public function hallo(Request $request){
        //dd($request->all());
        echo "welcome :" .$request["name1"];
        echo "<br>";
        echo "terimakasih sudah bergabung di sanbercode..";

    }
}
