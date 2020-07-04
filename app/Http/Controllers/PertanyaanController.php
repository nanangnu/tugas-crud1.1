<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.index');
    }

    public function create() {
     
    }

    public function store(Request $request) {
        $new_item = PertanyaanModel::save($request);
        return redirect('/pertanyaan');
    }


}
