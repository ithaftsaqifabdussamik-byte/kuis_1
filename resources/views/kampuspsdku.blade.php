@extends('layouts.app')

@section('title', 'Profil Kampus')

@section('content')

<div class="container">

    <div class="box" id="profil">

        <h2>Profil Kampus</h2>

        <p>
            {{ $deskripsi }}
        </p>

        <p>
            Kampus ini menjadi tempat bagi mahasiswa untuk
            mendapatkan pendidikan dan mengembangkan keterampilan
            sesuai dengan bidang yang dipelajari.
        </p>

    </div>


    <div class="box" id="prodi">

        <h2>Program Studi</h2>

        <div class="prodi-container">

            @foreach ($programStudi as $prodi)

                <div class="prodi">

                    <h3>{{ $prodi }}</h3>

                    <p>
                        Program studi yang memberikan pembelajaran
                        sesuai dengan bidang yang dipelajari mahasiswa.
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</div>

@endsection