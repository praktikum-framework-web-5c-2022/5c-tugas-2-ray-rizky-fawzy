@extends('footer')
@extends('navbar')

@section('nav-active')
<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/dosen">Dosen</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/matakuliah">Mata Kuliah</a>
    </li>
</ul>
@endsection

@section('content')
<div class="container py-5">
    <div class="container-fluid py-5">
        <div class="border-3 border-dark border-bottom border-top">
            <h3 class="text-center py-center fw-bolder">DAFTAR MATAKULIAH</h3>
        </div>
    </div>
    <div class="row justify-content-evenly">
            @foreach (range(0,9) as $y)
                <div class="col-4 p-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $matakuliahs[$y] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><a class="link-secondary" href="/dosen" style="text-decoration: none;">{{ $dosens[$y] }}</a></h6>
                            <p class="card-text"></p>
                            <a href="#" class="card-link" style="text-decoration: none;">{{ $haris[$y] }}, {{ $jams[$y] }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection

@section('footers')
@endsection