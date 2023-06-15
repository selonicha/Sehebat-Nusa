@extends('component.master')

@push("style")
<link rel="stylesheet" href="{{asset('asset/css/auth/login.css')}}">
@endpush

@section('title')
Login
@endsection

@section('body')

<body class="">
    <div class="row">
        <div class="col-sm-6 d-flex justify-content-center align-items-center" style="height:100%">
            <div class="row d-flex justify-content-center align-items-center">
                <img style="height:600px;width:600px;margin:80px" src="{{asset('asset/image/logo-sehebat-nusa.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-6 p-5 login-right d-flex justify-content-center align-items-center" style="padding-top:0%">
            <div class="login d-flex justify-content-center align-items-center">
                <form action="authLogin" method="POST" class="login-form" style="width: 350px; height:200px">
                    @csrf
                    <div class="textLogin pb-4">
                        <h3 class="fw-bold">Masukkan Datamu!</h3>
                        <div class="fw-light d-flex" style="font-size: 0.7em">Platform ini hanya untuk akun yang sudah terdaftar sebagai admin dari e-comerance <span class="unique-char">Sehebat Nusa</span></div>
                    </div>
                    <div class="mb-4">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" placeholder="email...">
                    </div>
                    @error('name')
                    <div class="invalid-feedback">
                        {{message}}
                    </div>
                    @enderror
                    <div class="mb-4">
                        <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="password / username...">
                    </div>

                    <!-- <div class="help d-flex justify-content-center">
                        <h6 class="fw-light">Tidak punya akun?<span class="fw-semibold">
                                <a href="register" style="text-decoration:none;">daftar sekarang</a>
                            </span></h6>
                    </div> -->
                    <div class="submit d-flex justify-content-center align-items-center">
                        <button class="fw-bold text-white btn" role="button" style="background-color:var(--second-color); width:100%">kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection