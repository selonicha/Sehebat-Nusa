@extends('component.admin.sidebar')

@section('navbar-name')
Artikel
@endsection

@section('title')
Artikel
@endsection

@section('content')
<section class="home-section">
    @include('component.admin.navbar')
    <div class="main-section p-5">
        <div class="mycard">
            <div class="row fitur p-2" style="margin-left:10px;">
                <div class="col justify-content-start d-flex" style="padding-bottom:5px;">
                    <form action="" class="">
                        <select name="" id="" class="form-select rounded-md outline-none cursor-pointer" style="width:60px">
                            <option selected="5" value="5">5</option>
                            <option value="10">10</option>
                        </select>
                    </form>
                </div>
                <div class="col-sm-3 justify-content-end d-flex" style="margin-right:30px">
                    <input class="col-sm-3 form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <div class="col-sm-5 text-white justify-content-evenly d-flex p-2" style="background-color:var(--second-color);border-radius:5px">
                        <a href="#create" class="text-decoration-none d-flex" data-bs-toggle="modal">
                            <div class="col" style="">
                                <i style="color:white" class="bx bx-plus bx-size-36"></i>
                            </div>
                            <div class="col text-white">tambah </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-left:40px;padding-right:40px;padding-top:10px;">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th class="left">No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>File</th>
                                <th class="right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Berita tasyakur</td>
                                <td>Tabungan syariat qurban</td>
                                <td><img src="" alt=""></td>
                                <th>
                                    <div class="text-decoration-none">
                                        <div class="col d-flex justify-content-start" style="">
                                            <a href="#edit" class="text-decoration-none d-flex" data-bs-toggle="modal"><i class="bx bxs-pencil m-1 text-decoration-none"></i></a>
                                            <a href="#delete" class="text-decoration-none d-flex" data-bs-toggle="modal"><i class="bx bxs-trash-alt m-1 text-decoration-none"></i></a>
                                        </div>
                                    </div>
                                </th>


                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" style="padding:30px">
                <div class="col fw-semibold" style="font-size: 0.8em;">Total 5 data</div>
                <div class="col-sm-6 d-flex justify-content-end pagination">
                    <div class="container text-center d-flex justify-content-end">
                        <div class="row">
                            <div class="col border left" style="">
                                <div style="padding:4px">Previous</div>
                            </div>
                            <div class="col border">
                                <div style="padding:4px">1</div>
                            </div>
                            <div class="col border right">
                                <div style="padding:4px">Next</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('admin.artikel.component.create')
@include('admin.artikel.component.edit')
@include('admin.artikel.component.delete')

@endsection