<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //Buat Fungsi index untuk menampilkan view form
    public function index(){
        return view('form');
    }
    //Buat Fungsi hasil untuk menampilkan data inputan
    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
        ]);
    //Udah diisi 4 inputan
    return view('hasil', ['data' => $request]);
    }
}
