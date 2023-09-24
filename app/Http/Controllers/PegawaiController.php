<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // mengambil data dari table pegawai
    $pegawai = DB::table('pegawai')->get();
}