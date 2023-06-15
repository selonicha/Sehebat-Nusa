@extends('component.admin.sidebar')

@section('navbar-name')
Dashboard
@endsection

@section('title')
Dashboard
@endsection

@section('content')
<section class="home-section">
    @include('component.admin.navbar')

    <div class="main-section p-5">
        <div class="row justify-content-evenly d-flex" style="padding-top:20px">
            <div class="col-sm-3 pb-5 card-info justify-content-evenly d-flex align-items-center p-2" style="background-color: var(--green-color);">
                <div class="row">
                    <h2 class="text-white fw-semibold">500</h2>
                    <h6 style="font-size:0.6em;">jumlah user</h6>
                </div>
                <i style="width:50px;" class="bx bx-user-plus"></i>
            </div>
            <div class="col-sm-3 pb-5 card-info" style="background-color: var(--orange-color)">
                <div class="row">
                    <h2 class="text-white fw-semibold">500</h2>
                    <h6 style="font-size:0.6em;">jumlah user</h6>
                </div>
                <i style="width:50px;" class="bx bx-user-plus"></i>
            </div>
            <div class=" col-sm-3 pb-5 card-info" style="background-color: var(--blue-color)">
                <div class="row">
                    <h2 class="text-white fw-semibold">500</h2>
                    <h6 style="font-size:0.6em;">jumlah user</h6>
                </div>
                <i style="width:50px;" class="bx bx-user-plus"></i>
            </div>
        </div>
    </div>
</section>

@endsection