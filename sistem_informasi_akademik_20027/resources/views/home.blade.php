@extends('navbar')

@section('nav-active')
<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/dosen">Dosen</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/matakuliah">Mata Kuliah</a>
    </li>
</ul>
@endsection


@section('content')
<link rel="stylesheet" type="text/css" href="{{asset("/css/style.css")}}">
<div class="container py-5">
    <div class="container-fluid py-5">
        <div class="border-3 border-dark border-bottom border-top">
            <h1 class="text-center fw-bolder">SIAKAD FASILKOM UNSIKA</h1>
        </div>
        <div class="text-center position-absolute top-50 start-50 translate-middle bg-light p-2 text-dark bg-opacity-25">
            <h4>
                BERISI DATA INFORMASI DOSEN, MATAKULIAH DAN MAHASISWA FASILKOM
                <br>
                UNIVERSITAS SINGAPERBANGA KARAWANG
            </h4>
            <a class="btn btn-dark" href="/dosen" role="button">DOSEN</a>
            <a class="btn btn-dark" href="/mahasiswa" role="button">MAHASISWA</a>
            <a class="btn btn-dark" href="matakuliah" role="button">MATAKULIAH</a>
        </div>
    </div>
</div>
@endsection
