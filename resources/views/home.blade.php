<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')

@section('konten')
    <p>Ini Adalah Halaman Home</p>
    <p>Selamat datang !</p>
@endsection
