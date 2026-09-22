<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kampus_psdku extends Controller
{
     public function index()
    {
        $namaKampus = "Politeknik Negeri Malang";

        $deskripsi = "Politeknik Negeri Malang PSDKU Pamekasan merupakan salah satu bagian dari Politeknik Negeri Malang yang menyediakan pendidikan vokasi bagi mahasiswa.";

        $programStudi = [
            "D-III Manajemen Informatika",
            "D-IV Teknik Otomotif Elektronik",
            "D-IV Manajemen Akuntansi"
        ];


        return view('kampuspsdku', compact(
            'namaKampus',
            'deskripsi',
            'programStudi'
        ));
}
}