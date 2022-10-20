@extends('footer')
@extends('navbar')

@section('nav-active')
<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <li class="nav-item">
        <a class="nav-link"  href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/dosen">Dosen</a>
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

<div class="container py-5">
    <div class="container-fluid py-5">
        <div class="border-3 border-dark border-bottom border-top">
            <h3 class="text-center py-center fw-bolder">DAFTAR DOSEN FASILKOM UNSIKA</h3>
        </div>
    </div>
    @foreach(range(0, 9) as $y)
        <div class="border-dark border-bottom row">
            <div class="card border-bottom col-6 col-sm-3" style="width: 18rem;">
                <img src="https://media.istockphoto.com/vectors/user-icon-flat-isolated-on-white-background-user-symbol-vector-vector-id1300845620?k=20&m=1300845620&s=612x612&w=0&h=f4XTZDAv7NPuZbG0habSpU0sNgECM0X7nbKzTUta3n8=" class="card-img-top" alt="...">
            </div>
            <div class="col-6 col-sm-3">
                Dosen Fasilkom Unsika pengampu matakuliah: <h6><a href="/matakuliah" style="text-decoration: none;">{{ $matakuliahs[$y] }}</a></h6>
            </div>
            <h5>{{$dosens[$y]}}</h5>
        </div>
    @endforeach
</div>
@endsection

@section('footers')
@endsection
