<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForminputController extends Controller
{
    public function input()
    {
        $ar_lokasi = ["Surakarta", "Jakarta", "Depok", "Bogor", "Tanggerang"];
        return view('form/input', ['lokasi' => $ar_lokasi]);
    }

    public function output(Request $request)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $lokasi = $request->input('lokasi');
        $jns_kelamin = $request->input('jns_kelamin');
        $skill = $request->input('skill');
        
        foreach ($skill as &$selectedSkill) {
            $selectedSkill = htmlspecialchars($selectedSkill);
        }
        return view('form/output',
            ['nama'=>$nama, 'email'=>$email, 'lokasi'=>$lokasi, 'jns_kelamin'=>$jns_kelamin, 'skill'=>$skill]);
    }
}
