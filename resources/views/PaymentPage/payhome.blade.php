@extends('layout')
@section('content')
    @if (Auth::user()->role == 'user')
    <div class="col-lg-12 col-md-6 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                   
                    <div class="stat-content">
                        <div class="text-left dib mt-2  " >

                            <h3 style="margin-left: 250px">Selamat Datang, {{$student['name']}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    @endif
    @if (Auth::user()->role == 'admin')
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
        
    @endif
@endsection
