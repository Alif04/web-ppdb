@extends('layout')
@section('content')
<div class="top-50 start-50 translate-middle " style="margin-left:350px;">
  
    <div class="animate__animated animate bounce card " style="width: 22rem;">
      <div class="container mt-3">
        <img src="{{asset('/assets/img/wikrama-ppdb/'.$studentDetail->imageBukti )}}" class="card-img-top "   alt="..."></div>
      <div class="card-body">
        <h5 class="card-title ms-1">Bukti</h5>
        <p class="card-text  ms-1">Name : {{$studentDetail->pemilikRek}} </p>
        <p class="card-text  ms-1">Nominal : {{$studentDetail->nominal }} </p>
        <p class="card-text  ms-1">Name : {{$studentDetail->namaBank}} </p>

    
        <a href="/payment"  class="btn btn-primary mb-1 mt-1 ">Go Back</a>
      </div>
    </div>
      </div>
    
@endsection