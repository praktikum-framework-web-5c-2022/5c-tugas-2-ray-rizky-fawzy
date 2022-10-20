<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Matakuliah;


class MatakuliahController extends Controller
{
    public function matakuliah(){
    $matakuliah = [
        "DATA MINING",
        "TECHNOPRENEUR",
        "CLOUDCOMPUTING",
        "BLOCK CHAIN",
        "PEMROGRAMAN BERBASIS MOBILE",
        "FRAMEWORK PEMROGRAMAN WEB",
        "BASIS DATA",
        "TEORI BAHASA DAN AUTOMATA",
        "METODE NUMERIK",
        "FISIKA DASAR",
    ];
    $jam = [
        "13.45 WIB",
        "11.30 WIB",
        "12.00 WIB",
        "9.45 WIB",
        "10.00 WIB",
        "14.45 WIB",
        "15.00 WIB",
        "7.45 WIB",
        "16.30 WIB",
        "8.45 WIB",
    ];
    $hari = [
        "Senin",
        "Kamis",
        "Rabu",
        "Senin",
        "Selasa",
        "Jumat",
        "Kamis",
        "Senin",
        "Rabu",
        "Senin",
    ];
    $dosen = [
        "Betha Nurina Sari",
        "Rini Mayasari",
        "Arip Solehudin",
        "Adhi Rizal",
        "Purwantoro",
        "Aji Primajaya",
        "Asep Jamaludin",
        "Garno",
        "Riza Ibnu",
        "SusilawatiSobur",
    ];
    return view('matakuliah', ['matakuliahs' => $matakuliah, 'jams' => $jam, 'haris' => $hari, 'dosens' => $dosen]);
    }

    public function insertRawMatakuliah(){
        $sql = DB::insert('insert into matakuliah(kode_mk, nama_mk) values ("1122", "Framework")');
        dump($sql);
    }
    public function selectRawMatakuliah(){
        $sql = DB::select('SELECT * FROM matakuliah');
        dump($sql);
    }
    public function updateRawMatakuliah(){
        $sql = DB::update('UPDATE matakuliah SET kode_mk="1123" where id = 1');
        dump($sql);
    }
    public function deleteRawDosen(){
        $sql = DB::delete('DELETE FROM matakuliah WHERE nama = Framework');
        dump($sql);
    }

    public function insertQueryMatakuliah(){
        $sql = DB::table('matakuliah')->insert(
            [
                'kode_mk' => '2345',
                'nama_mk' => 'PBM',
            ]
        );
        dump($sql);
    }
    public function selectQueryMatakuliah(){
        $sql = DB::table('matakuliah')->get();
        dump($sql);
    }
    public function updateQueryMatakuliah(){
        $sql = DB::table('matakuliah')->where('nama_mk', 'PBM')->update(
            [
                'updated_at' => now()
            ]
            );
        dump($sql);
    }
    public function deleteQueryDosen(){
        $sql = DB::table('matakuliah')->where('nama_mk', 'PBM')->delete();
        dump($sql);
    }

    public function insertEloquentMatakuliah(){
        Matakuliah::create(
            [
                'kode_mk' => '2011',
                'nama_mk' => 'Data Mining',
            ]
            );
        return 'insert berhasil diproses';
    }
    public function selectEloquentMatakuliah(){
        $result = Matakuliah::all();
        dump($result);
    }
    public function updateEloquentMatakuliah(){
        Matakuliah::where('id', 3)->first()->update(
            [
                'kode_mk' => '2055',
                'nama_mk' => 'Technopreneur',
            ]
        );
        return 'update berhasil diproses';
    }
    public function deleteEloquentDosen(){
        $result = Dosen::where('kode_mk', '2055')->delete();
        dump($result);
    }
}
