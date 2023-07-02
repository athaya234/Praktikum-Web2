<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Buat fungsi index untuk menampilkan view form
    public function index()
    {
        return view('skill');
    }

    //Buat fungsi hasil untuk menampilkan data input
    public function skill(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
        //udah diisi 4 inputan
        return view('hasilskill', ['data' => $request]);
    }
}
