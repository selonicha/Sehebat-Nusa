@extends('component.master')


@section('inner-body')

<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #ffffff;padding-right:30px;padding-left:30px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('asset/image/logo-sehebat-nusa.png')}}" alt="Bootstrap" width="100px" height="80px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active fw-semibold" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fw-semibold" aria-current="page" href="/sehebat-nusa">Sehebat Nusa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fw-semibold" aria-current="page" href="#journey">Produk Qurban</a>
        </li>
      </ul>
    </div>
    <a href="order-summary" class="text-decoration-none">
      <div class="justify-content-end">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
      </div>
    </a>
  </div>
</nav>

@yield('content')

@endsection