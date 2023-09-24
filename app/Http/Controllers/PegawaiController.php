<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $pegawais = DB::table('pegawai')->get();

        //menampilkan data pegawai ke view index
        return view('index', ['pegawais' => $pegawais]);
    }
}
