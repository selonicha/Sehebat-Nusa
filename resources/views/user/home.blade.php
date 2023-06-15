@extends('component.user.navbar')

@section('content')
<div class="landing-page m-5 p-4" style="">
    <div class="row">
        <div class="col-sm-5 justify-content-center d-flex align-items-center">
            <div class="row">
                <h2 class="fw-bold" style="font-size:2.5em">Yuk Qurban bersama
                    <span class="unique">SEHEBAT NUSA</span>
                </h2>
                <h5 class="fw-light">Kami akan menyalurkan titipan Qurban Anda hingga ke daerah pelosok di berbagai wilayah Indonesia</h5>
                <div class="col justify-content-center d-flex align-items-center p-5 ">
                    <button type="button" class="btn rounded-2 m-3" style="background-color: var(--second-color); color: #ffffff;">Qurban sekarang</button>
                    <button type="button" class="btn rounded-2" style="border: solid; border-color: var(--second-color);color: var(--second-color)">Tanya admin</button>
                </div>
            </div>
        </div>
        <div class="col p-5 d-flex justify-content-center align-items-center">
            <img src="{{asset('asset/image/HewanQurbanLanding.png')}}" alt="">
        </div>
    </div>
</div>
@include('component.user.trust')
@include('component.user.keunggulan')
@include('component.user.mengapa')
@include('component.user.target')
@include('component.user.testimoni')
@include('component.user.artikel')
<div class="justify-content-center d-flex align-items-center" style="padding-top:50px">
    <img src="{{asset('asset/image/Map.png')}}" alt="">
</div>

@include('component.user.footer')
@endsection