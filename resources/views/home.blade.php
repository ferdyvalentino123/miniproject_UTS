@extends('layouts.app')
@section('content')
<body style="background-color: burlywood">
<div class="container-sm my-5">
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-4 border">
            <div class="mb-3 text-center">
                <img src="lennn.jpg" class="img-fluid rounded-start" alt="">
                <h4>DATA MAHASISWA</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="namaMahasiswa" class="form-label">Nama Mahasiswa : Ferdynal Christian Valentino</label>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="programStudi" class="form-label">Program Studi : Sistem Informasi</label>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="kelas" class="formlabel">Kelas : IS - 05 - 02</label>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="angkatan" class="formlabel">Angkatan : 2022</label>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="university" class="formlabel">Telkom University Surabaya</label>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
</body>
@endsection
