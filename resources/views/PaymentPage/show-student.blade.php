@extends('layout')
@section('content')
<div class="col-lg-12 col-md-6 mt-5">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-five">
               
                <div class="stat-content">
                    <div class="text-left dib mt-2  " >

                        <h3 style="margin-left: 250px">Selamat Datang, Admin</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class="d-flex justify-content-center">
        <div>
            <div class="card" style="width: 500px; margin-top:5px; margin-bottom:50px;">
                <div class="card-header" style="color: #02225B;">
                    Detail Siswa
                </div>
                    <ul class="list-group list-group-flush" style="line-height:1px;">
                        <li class="list-group-item mt-2">NISN : {{$showStudent->nisn}}</li>
                        <li class="list-group-item mt-2">Nama Siswa : {{$showStudent->name}}</li>
                        <li class="list-group-item mt-2">Jenis Kelamin : {{$showStudent->jk}}</li>
                        <li class="list-group-item mt-2">Asal Sekolah : {{$showStudent->asalSekolah}}</li>
                        <li class="list-group-item mt-2">Email : {{$showStudent->email}}</li>
                        <li class="list-group-item mt-2">No HP : {{$showStudent->noHp}}</li>
                        <li class="list-group-item mt-2">No HP Ayah : {{$showStudent->noAyah}}</li>
                        <li class="list-group-item mt-2">No HP Ibu : {{$showStudent->noIbu}}</li>
                    </ul>
            </div>
            <div style="margin-bottom:50px;">
                <a href="/payhome" style="background-color:#008374" class="btn text-white" type="button">Kembali</a>
            </div>
        </div>
    </div>
@endsection
