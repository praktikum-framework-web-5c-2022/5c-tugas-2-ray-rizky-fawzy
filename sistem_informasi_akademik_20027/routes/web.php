<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Akses Controller
Route::get('/dosen', [DosenController::class, 'dosen']);
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);
Route::get('/matakuliah', [MatakuliahController::class, 'matakuliah']);

//RawSql
Route::get('/insertRawDosen', [DosenController::class, 'insertRawDosen']);
Route::get('/selectRawDosen', [DosenController::class, 'selectRawDosen']);
Route::get('/updateRawDosen', [DosenController::class, 'updateRawDosen']);
Route::get('/deleteRawDosen', [DosenController::class, 'deletRawDosen']);
Route::get('/insertRawMahasiswa', [MahasiswaController::class, 'insertRawMahasiswa']);
Route::get('/selectRawMahasiswa', [MahasiswaController::class, 'selectRawMahasiswa']);
Route::get('/updateRawMahasiswa', [MahasiswaController::class, 'updateRawMahasiswa']);
Route::get('/deleteRawMahasiswa', [MahasiswaController::class, 'deleteRawMahasiswa']);
Route::get('/insertRawMatakuliah', [MatakuliahController::class, 'insertRawMatakuliah']);
Route::get('/selectRawMatakuliah', [MatakuliahController::class, 'selectRawMatakuliah']);
Route::get('/updateRawMatakuliah', [MatakuliahController::class, 'updateRawMatakuliah']);
Route::get('/deleteRawMatakuliah', [MatakuliahController::class, 'deleteRawMatakuliah']);

//QueryBuilder
Route::get('/insertQueryDosen', [DosenController::class, 'insertQueryDosen']);
Route::get('/selectQueryDosen', [DosenController::class, 'selectQueryDosen']);
Route::get('/updateQueryDosen', [DosenController::class, 'updateQueryDosen']);
Route::get('/deleteQueryDosen', [DosenController::class, 'deleteQueryDosen']);
Route::get('/insertQueryMahasiswa', [MahasiswaController::class, 'insertQueryMahasiswa']);
Route::get('/selectQueryMahasiswa', [MahasiswaController::class, 'selectQueryMahasiswa']);
Route::get('/updateQueryMahasiswa', [MahasiswaController::class, 'updateQueryMahasiswa']);
Route::get('/deleteQueryMahasiswa', [MahasiswaController::class, 'deleteQueryMahasiswa']);
Route::get('/insertQueryMatakuliah', [MatakuliahController::class, 'insertQueryMatakuliah']);
Route::get('/selectQueryMatakuliah', [MatakuliahController::class, 'selectQueryMatakuliah']);
Route::get('/updateQueryMatakuliah', [MatakuliahController::class, 'updateQueryMatakuliah']);
Route::get('/deleteQueryMatakuliah', [MatakuliahController::class, 'deleteQueryMatakuliah']);

//QueryBuilder
Route::get('/insertEloquentDosen', [DosenController::class, 'insertEloquentDosen']);
Route::get('/selectEloquentDosen', [DosenController::class, 'selectEloquentDosen']);
Route::get('/updateEloquentDosen', [DosenController::class, 'updateEloquentDosen']);
Route::get('/deleteEloquentDosen', [DosenController::class, 'deleteEloquentDosen']);
Route::get('/insertEloquentMahasiswa', [MahasiswaController::class, 'insertEloquentMahasiswa']);
Route::get('/selectEloquentMahasiswa', [MahasiswaController::class, 'selectEloquentMahasiswa']);
Route::get('/updateEloquentMahasiswa', [MahasiswaController::class, 'updateEloquentMahasiswa']);
Route::get('/deleteEloquentMahasiswa', [MahasiswaController::class, 'deleteEloquentMahasiswa']);
Route::get('/insertEloquentMatakuliah', [MatakuliahController::class, 'insertEloquentMatakuliah']);
Route::get('/selectEloquentMatakuliah', [MatakuliahController::class, 'selectEloquentMatakuliah']);
Route::get('/updateEloquentMatakuliah', [MatakuliahController::class, 'updateEloquentMatakuliah']);
Route::get('/deleteEloquentMatakuliah', [MatakuliahController::class, 'deleteEloquentMatakuliah']);


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });


// Route::get('/dosen', function () {
    // $dosen = [
    //     "Betha Nurina Sari",
    //     "Rini Mayasari",
    //     "Arip Solehudin",
    //     "Adhi Rizal",
    //     "Purwantoro",
    //     "Aji Primajaya",
    //     "Asep Jamaludin",
    //     "Garno",
    //     "Riza Ibnu",
    //     "SusilawatiSobur",
    // ];
    // $matakuliah = [
    //     "DATA MINING",
    //     "TECHNOPRENEUR",
    //     "CLOUD COMPUTING",
    //     "BLOCKCHAIN",
    //     "PEMROGRAMAN BERBASIS MOBILE",
    //     "FRAMEWORK PEMROGRAMAN WEB",
    //     "BASIS DATA",
    //     "TEORI BAHASA DAN AUTOMATA",
    //     "METODE NUMERIK",
    //     "FISIKA DASAR",
    // ];
//     return view('dosen', ['dosens' => $dosen, 'matakuliahs' => $matakuliah]);
// });

// Route::get('/mahasiswa', function () {
//     $mahasiswa = [
//         "Ray Rizky Fawzy",
//         "Escanor",
//         "Asta",
//         "Robin",
//         "Nami",
//         "Itadori Yuji",
//         "Yami Sukehiro",
//         "Yassop",
//         "Yor",
//         "Rias Gremory",
//     ];
//     $asal = [
//         "Bekasi",
//         "Karawang",
//         "Purwakarta",
//         "Bogor",
//         "Bekasi",
//         "Bandung",
//         "Solo",
//         "Karawang",
//         "Sukabumi",
//         "Karawang",
//     ];
//     $tgl = [
//         "13 April 2002",
//         "1 Juli 1993",
//         "14 Mei 2003",
//         "25 Agustus 1995",
//         "21 Juli 2002",
//         "17 Januari 2001",
//         "12 September 1990",
//         "23 Oktober 1992",
//         "19 Desember 1995",
//         "15 Maret 2004",
//     ];
//     $kelas = [
//         "5C",
//         "5D",
//         "5A",
//         "5C",
//         "5C",
//         "5F",
//         "5D",
//         "5B",
//         "5F",
//         "5A",
//     ];
//     $prodi = [
//         "INFORMATIKA",
//         "SISTEM INFORMASI",
//         "SISTEM INFORMASI",
//         "INFORMATIKA",
//         "INFORMATIKA",
//         "SISTEM INFORMASI",
//         "INFORMATIKA",
//         "SISTEM INFORMASI",
//         "SISTEM INDORMASI",
//         "INFORMATIKA",
//     ];
//     $quote = [
//         '"Keputusanmu saat ini dapat merubah takdirmu dimasa yang akan datang."',
//         '"Ketenangan adalah ciri khas orang-orang perkasa."',
//         '"Jangan menyerahkan impian sepenting itu pada orang lain. Teruslah hidup dan wujudkan impianmu sendiri!"',
//         '"Orang Bodoh Yang Tidak Menghargai Masa Lalu Ditakdirkan Untuk Mengulanginya."',
//         '"Hidup itu seperti pensil yang pasti akan habis, tetapi akan meninggalkan tulisan indah dalam kehidupan."',
//         '"Aku tidak tau bagaimana perasaanku ketika Aku mati nanti, Tapi setidaknya Aku tidak ingin menyesali cara hidupku."',
//         '"Jangan pernah menyerah di situasi apapun! Lampaui batasanmu! Dengan begitu, sebuah jalan akan terbuka untukmu!"',
//         '"Jika kamu tak sanggup menghadapinya, maka larilah secepat yang kamu bisa."',
//         '"Sepertinya ini hanyalah tentang aku yang berada di tempat dan waktu yang salah."',
//         '"Masuk dan bergembiralah bersamaku!"',
//     ];
//     $cite = [
//         "Ray Rizky Fawzy",
//         "Escanor",
//         "Asta",
//         "Robin",
//         "Nami",
//         "Itadori Yuji",
//         "Yami Sukehiro",
//         "Yassop",
//         "Yor",
//         "Rias Gremory",
//     ];
//     return view('mahasiswa', ['mahasiswas' => $mahasiswa, 'asals' => $asal, 'tgls' => $tgl, 'kelass' => $kelas, 'prodis' => $prodi, 'quotes' => $quote, 'cites' => $cite]);
// });

// Route::get('/matakuliah', function () {
//     $matakuliah = [
//         "DATA MINING",
//         "TECHNOPRENEUR",
//         "CLOUDCOMPUTING",
//         "BLOCK CHAIN",
//         "PEMROGRAMAN BERBASIS MOBILE",
//         "FRAMEWORK PEMROGRAMAN WEB",
//         "BASIS DATA",
//         "TEORI BAHASA DAN AUTOMATA",
//         "METODE NUMERIK",
//         "FISIKA DASAR",
//     ];
//     $jam = [
//         "13.45 WIB",
//         "11.30 WIB",
//         "12.00 WIB",
//         "9.45 WIB",
//         "10.00 WIB",
//         "14.45 WIB",
//         "15.00 WIB",
//         "7.45 WIB",
//         "16.30 WIB",
//         "8.45 WIB",
//     ];
//     $hari = [
//         "Senin",
//         "Kamis",
//         "Rabu",
//         "Senin",
//         "Selasa",
//         "Jumat",
//         "Kamis",
//         "Senin",
//         "Rabu",
//         "Senin",
//     ];
//     $dosen = [
//         "Betha Nurina Sari",
//         "Rini Mayasari",
//         "Arip Solehudin",
//         "Adhi Rizal",
//         "Purwantoro",
//         "Aji Primajaya",
//         "Asep Jamaludin",
//         "Garno",
//         "Riza Ibnu",
//         "SusilawatiSobur",
//     ];
//     return view('matakuliah', ['matakuliahs' => $matakuliah, 'jams' => $jam, 'haris' => $hari, 'dosens' => $dosen]);
// });
