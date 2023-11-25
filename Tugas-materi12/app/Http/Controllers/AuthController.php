<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // tambahkan ini

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        // Mengambil data dari formulir pendaftaran
        $namaDepan = $request->input('nama_depan');
        $namaBelakang = $request->input('nama_belakang');

        // Menyusun data untuk dikirim ke view
        $data = [
            'nama_depan' => $namaDepan,
            'nama_belakang' => $namaBelakang,
        ];

        // Mereturn view 'welcome' dengan data
        return view('welcome', compact('data'));
    }
}
