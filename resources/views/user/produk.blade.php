@extends('component.user.navbar')

@section('content')
<div class="explain p-5" style="margin-top:80px !important;margin-left:40px !important;">
    <div class="card rounded p-1" style="width: 18rem;">
        <img src="{{asset('asset/image/HewanQurbanLanding.png')}}" class="card-img-top" alt="..." style="width:300px;height:200px">
        <div class="card-body justify-content-center d-flex align-items-center">
            <div class="row p-1">
                <h2 style="font-size:1.2em" class="fw-semibold">Card items</h2>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary ">Tambah keranjang</a>
            </div>
        </div>
    </div>
</div>

@include('component.user.footer')
@endsection