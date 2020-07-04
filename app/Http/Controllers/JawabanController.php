<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function create(){
        return view('');
    }

    public function store(Request $request){
        $new_jawaban = JawabanModel::save('$request');
        return redirect('');
    }

    public function index(){
        $jawaban = JawabanModel::getall();
        return view('');
    }
}
