@extends('footer')
@extends('navbar')

@section('nav-active')
<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <li class="nav-item">
        <a class="nav-link"  href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/dosen">Dosen</a>
    </li>
    <li class="nav-item">
        <a class="nav-link  active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
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
            <h3 class="text-center py-center fw-bolder">DAFTAR MAHASISWA FASILKOM UNSIKA</h3>
        </div>
    </div>
    @foreach (range(0, 9) as $y)
        <div class="border-dark border-bottom row">
            <div class="card border-bottom col-6 col-sm-3" style="width: 18rem;">
                <img src="https://media.istockphoto.com/vectors/user-icon-flat-isolated-on-white-background-user-symbol-vector-vector-id1300845620?k=20&m=1300845620&s=612x612&w=0&h=f4XTZDAv7NPuZbG0habSpU0sNgECM0X7nbKzTUta3n8=" class="card-img-top" alt="...">
            </div>
            <div class="col-6 ">
                <h6>Biodata</h6>
                <table>
                    <tr>
                        <td>
                            Asal
                        </td>
                        <td>
                            : {{$asals[$y]}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tanggal lahir
                        </td>
                        <td>
                            : {{$tgls[$y]}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Kelas
                        </td>
                        <td>
                            : {{$kelass[$y]}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Prodi
                        </td>
                        <td>
                            : {{$prodis[$y]}}
                        </td>
                    </tr>
                </table>
                <br>
                <blockquote>
                    <i>{{$quotes[$y]}}</i>
                    <footer>- <cite>{{ $cites[$y] }}</cite></footer>
                </blockquote> 
            </div>
            <h5>{{$mahasiswas[$y]}}</h5>
        </div>
    @endforeach
</div>

@endsection

@section('footers')
@endsection