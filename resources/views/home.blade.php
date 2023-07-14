@extends('layouts.master')

@section('warnahome', 'active')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Selamat Datang</h2>
                </div>

                <div class="card-body">
                    <p>
                        Sistem Informasi Pengolahan absensi ini diimplementasikan terhadap tiga pengguna, dimana penggunanya yaitu admin, guru dan ketua kelas.
                    </p>

                    <p>
                        Ketua kelas dapat melakukan absensi sesuai dengan ruang lingkupnya, dan hanya dapat melakukan satu kali perubahan ket absensi.
                    </p>
                    <p>
                        Guru dapat melakukan pemilihan data absensi siswa di kelas dan melakukan perubahan data absensi siswa
                    </p>
                    <p>
                        Admin dapat melakukan pencetakan data absensi serta mengolah data siswa dan guru
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
