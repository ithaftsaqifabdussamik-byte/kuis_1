@extends('layouts.app')

@section('title', 'Profil Kampus')

@section('content')

<div class="container py-4">

```
<!-- Profil Kampus -->
<div class="card shadow-sm border-0 mb-4" id="profil">

    <div class="card-body p-4">

        <h2 class="card-title mb-3">
            Profil Kampus
        </h2>

        <p class="card-text">
            {{ $deskripsi }}
        </p>

        <p class="card-text">
            Kampus ini menjadi tempat bagi mahasiswa untuk
            mendapatkan pendidikan dan mengembangkan keterampilan
            sesuai dengan bidang yang dipelajari.
        </p>

    </div>

</div>


<!-- Program Studi -->
<div class="card shadow-sm border-0" id="prodi">

    <div class="card-body p-4">

        <h2 class="mb-4">
            Program Studi
        </h2>

        <div class="row g-4">

            @foreach ($programStudi as $prodi)

                <div class="col-md-4">

                    <div class="card h-100 shadow-sm">

                        <div class="card-body">

                            <h3 class="h5 card-title">
                                {{ $prodi }}
                            </h3>

                            <p class="card-text">
                                Program studi yang memberikan
                                pembelajaran sesuai dengan bidang
                                yang dipelajari mahasiswa.
                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</div>
```

</div>

@endsection
