<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller{

    public function dosen(){
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
        $matakuliah = [
            "DATA MINING",
            "TECHNOPRENEUR",
            "CLOUD COMPUTING",
            "BLOCKCHAIN",
            "PEMROGRAMAN BERBASIS MOBILE",
            "FRAMEWORK PEMROGRAMAN WEB",
            "BASIS DATA",
            "TEORI BAHASA DAN AUTOMATA",
            "METODE NUMERIK",
            "FISIKA DASAR",
        ];
        return view('dosen', ['dosens' => $dosen, 'matakuliahs' => $matakuliah]);
    }
    public function insertRawDosen(){
        $sql = DB::insert('insert into dosen(nidn, nama, jenis_kelamin, alamat, tempat_lahir, tanggal_lahir, photo) values ("2010", "Betha", "P", "Purwakarta", "Bandung", "1995-02-19", "dasdsadaw")');
        dump($sql);
    }
    public function selectRawDosen(){
        $sql = DB::select('SELECT * FROM dosen');
        dump($sql);
    }
    public function updateRawDosen(){
        $sql = DB::update('UPDATE dosen SET nidn="2011" where id = 1');
        dump($sql);
    }
    public function deleteRawDosen(){
        $sql = DB::delete('DELETE FROM dosen WHERE nama = Betha');
        dump($sql);
    }

    public function insertQueryDosen(){
        $sql = DB::table('dosen')->insert(
            [
                'nidn' => '2013',
                'nama' => 'Escanor',
                'jenis_kelamin' => 'L',
                'alamat' => 'Bekasi',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1990-07-13',
                'photo' => 'kjasdsjkadjb',
            ]
        );
        dump($sql);
    }
    public function selectQueryDosen(){
        $sql = DB::table('dosen')->get();
        dump($sql);
    }
    public function updateQueryDosen(){
        $sql = DB::table('dosen')->where('nama', 'Escanor')->update(
            [
                'updated_at' => now()
            ]
            );
        dump($sql);
    }
    public function deleteQueryDosen(){
        $sql = DB::table('dosen')->where('nama', 'Escanor')->delete();
        dump($sql);
    }

    public function insertEloquentDosen(){
        Dosen::create(
            [
                'nidn' => '2063',
                'nama' => 'Ban',
                'jenis_kelamin' => 'L',
                'alamat' => 'Bogor',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1990-11-17',
                'photo' => 'gaedgfaef',
            ]
            );
        return 'insert berhasil diproses';
    }
    public function selectEloquentDosen(){
        $result = Dosen::all();
        dump($result);
    }
    public function updateEloquentDosen(){
        Dosen::where('id', 4)->first()->update(
            [
                'nidn' => '2055',
                'nama' => 'Meliodas',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '1993-12-19',
                'photo' => 'dfasfsdfsdf',
            ]
        );
        return 'update berhasil diproses';
    }
    public function deleteEloquentDosen(){
        $result = Dosen::where('nidn', '2055')->delete();
        dump($result);
    }
}
