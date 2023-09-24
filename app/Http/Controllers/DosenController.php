<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama = "Ekky Sukmawati";
        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "PemrogramanWeb"];
        return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
