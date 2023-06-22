@extends('component.user.navbar')

@section('content')
<div class="landing-page m-1 p-1" style="padding-top:130px !important">
    <div class="d-flex justify-content-center align-items-center fw-normal pb-2" style="font-size:2em">Keranjang Qurban</div>
    <div class="mycard">
        <div class="row " style="padding-left:40px;padding-right:40px;padding-top:10px;">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="left">No</th>
                            <th>Tipe hewan</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            <th>Total harga</th>
                            <th class="right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Domba tipe A</td>
                            <td>Rp. 3800000</td>
                            <td>
                                <div class="row">
                                    <div class="col-2 border left" style="">
                                        <a href="@" class="text-decoration-none">
                                            <div style="padding:2px" class="fw-semibold">-</div>
                                        </a>
                                    </div>
                                    <div class="col-2 border">
                                        <div style="padding:2px">2</div>
                                    </div>
                                    <div class="col-2 border right">
                                        <a href="@" class="text-decoration-none">
                                            <div style="padding:2px">+</div>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>Rp.7600000</td>
                            <th>
                                <div class="text-decoration-none">
                                    <div class="col d-flex justify-content-start" style="">
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
            <div class="col fw-semibold" style="font-size: 1em;">Total belanja</div>
            <div class="col-sm-6 d-flex justify-content-end pagination">
                <div class="container text-center d-flex justify-content-end">
                    <div class="row">
                        Rp.7600000
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding:30px">
        <div class="col justify-content-start d-flex">
            <div class="col-sm-3 p-2 justify-content-center d-flex " style="background-color:var(--primary-color);border-radius:5px">
                <a href="/produk-qurban" class=" text-decoration-none">
                    <div class="col text-white ">lanjut qurban </div>
                </a>
            </div>
        </div>
        <div class="col justify-content-end d-flex">
            <div class="col-sm-3 p-2 justify-content-center d-flex " style="background-color:var(--second-color);border-radius:5px">
                <a href="" class=" text-decoration-none">
                    <div class="col text-white">checkout </div>
                </a>
            </div>
        </div>
    </div>
</div>
@include('component.user.footer')

@endsection
@include('user.deleteCart')