<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = [
            "Ray Rizky Fawzy",
            "Escanor",
            "Asta",
            "Robin",
            "Nami",
            "Itadori Yuji",
            "Yami Sukehiro",
            "Yassop",
            "Yor",
            "Rias Gremory",
        ];
        $asal = [
        "Bekasi",
        "Karawang",
        "Purwakarta",
        "Bogor",
        "Bekasi",
        "Bandung",
        "Solo",
        "Karawang",
        "Sukabumi",
        "Karawang",
        ];
        $tgl = [
            "13 April 2002",
            "1 Juli 1993",
            "14 Mei 2003",
            "25 Agustus 1995",
            "21 Juli 2002",
            "17 Januari 2001",
            "12 September 1990",
            "23 Oktober 1992",
            "19 Desember 1995",
            "15 Maret 2004",
        ];
        $kelas = [
            "5C",
            "5D",
            "5A",
            "5C",
            "5C",
            "5F",
            "5D",
            "5B",
            "5F",
            "5A",
        ];
        $prodi = [
            "INFORMATIKA",
            "SISTEM INFORMASI",
            "SISTEM INFORMASI",
            "INFORMATIKA",
            "INFORMATIKA",
            "SISTEM INFORMASI",
            "INFORMATIKA",
            "SISTEM INFORMASI",
            "SISTEM INDORMASI",
            "INFORMATIKA",
        ];
        $quote = [
            '"Keputusanmu saat ini dapat merubah takdirmu dimasa yang akan datang."',
            '"Ketenangan adalah ciri khas orang-orang perkasa."',
            '"Jangan menyerahkan impian sepenting itu pada orang lain. Teruslah hidup dan wujudkan impianmu sendiri!"',
            '"Orang Bodoh Yang Tidak Menghargai Masa Lalu Ditakdirkan Untuk Mengulanginya."',
            '"Hidup itu seperti pensil yang pasti akan habis, tetapi akan meninggalkan tulisan indah dalam kehidupan."',
            '"Aku tidak tau bagaimana perasaanku ketika Aku mati nanti, Tapi setidaknya Aku tidak ingin menyesali cara hidupku."',
            '"Jangan pernah menyerah di situasi apapun! Lampaui batasanmu! Dengan begitu, sebuah jalan akan terbuka untukmu!"',
            '"Jika kamu tak sanggup menghadapinya, maka larilah secepat yang kamu bisa."',
            '"Sepertinya ini hanyalah tentang aku yang berada di tempat dan waktu yang salah."',
            '"Masuk dan bergembiralah bersamaku!"',
        ];
        $cite = [
            "Ray Rizky Fawzy",
            "Escanor",
            "Asta",
            "Robin",
            "Nami",
            "Itadori Yuji",
            "Yami Sukehiro",
            "Yassop",
            "Yor",
            "Rias Gremory",
        ];
        return view('mahasiswa', ['mahasiswas' => $mahasiswa, 'asals' => $asal, 'tgls' => $tgl, 'kelass' => $kelas, 'prodis' => $prodi, 'quotes' => $quote, 'cites' => $cite]);
    }

    public function insertRawMahasiswa(){
        $sql = DB::insert('insert into mahasiswa(npm, nama, jenis_kelamin, alamat, tempat_lahir, tanggal_lahir, photo) values ("2010", "Ray", "L", "Bekasi", "Bekasi", "2002-04-13", "fghfgafa")');
        dump($sql);
    }
    public function selectRawMahasiswa(){
        $sql = DB::select('SELECT * FROM mahasiswa');
        dump($sql);
    }
    public function updateRawMahasiswa(){
        $sql = DB::update('UPDATE mahasiswa SET npm="2011" where id = 1');
        dump($sql);
    }
    public function deleteRawDosen(){
        $sql = DB::delete('DELETE FROM mahasiswa WHERE nama = Ray');
        dump($sql);
    }

    public function insertQueryMahasiswa(){
        $sql = DB::table('mahasiswa')->insert(
            [
                'npm' => '2013',
                'nama' => 'Rizky',
                'jenis_kelamin' => 'L',
                'alamat' => 'Bekasi',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '2002-04-13',
                'photo' => 'ytfhfgsf',
            ]
        );
        dump($sql);
    }
    public function selectQueryMahasiswa(){
        $sql = DB::table('mahasiswa')->get();
        dump($sql);
    }
    public function updateQueryMahasiswa(){
        $sql = DB::table('mahasiswa')->where('nama', 'Rizky')->update(
            [
                'updated_at' => now()
            ]
            );
        dump($sql);
    }
    public function deleteQueryDosen(){
        $sql = DB::table('mahasiswa')->where('nama', 'Rizky')->delete();
        dump($sql);
    }

    public function insertEloquentMahasiswa(){
        Mahasiswa::create(
            [
                'npm' => '2063',
                'nama' => 'Fawzy',
                'jenis_kelamin' => 'L',
                'alamat' => 'Bogor',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '2002-12-17',
                'photo' => 'gaedgfesfsgs',
            ]
            );
        return 'insert berhasil diproses';
    }
    public function selectEloquentMahasiswa(){
        $result = Mahasiswa::all();
        dump($result);
    }
    public function updateEloquentMahasiswa(){
        Mahasiswa::where('id', 3)->first()->update(
            [
                'npm' => '2055',
                'nama' => 'Felas',
                'tempat_lahir' => 'Bandung',
            ]
        );
        return 'update berhasil diproses';
    }
    public function deleteEloquentDosen(){
        $result = Mahasiswa::where('npm', '2055')->delete();
        dump($result);
    }
}
