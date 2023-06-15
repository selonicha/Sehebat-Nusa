@extends('component.master')

@push("style")
<link rel="stylesheet" href="{{asset('asset/css/template/sidebar.css')}}">
@endpush

@section('inner-body')
<div class="sidebar close">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Sehebat Nusa</span>
    </div>
    <ul class="nav-links">
        <li>
            <div class="nav">
                <a href="dashboard" class="">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard">Dashboard</a></li>
                </ul>
            </div>
        </li>

        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-collection'></i>
                    <span class="link_name">Konten</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Konten</a></li>
                <li><a href="dipercayai-lembaga">Dipercayai lembaga</a></li>
                <li><a href="keunggulan">Keunggulan</a></li>
                <li><a href="target-distribusi">Target Distribusi</a></li>
                <li><a href="testimoni">Testimoni</a></li>
                <li><a href="hewan-qurban">Hewan Qurban</a></li>
                <li><a href="program-qurban">Program Qurban</a></li>
                <li><a href="artikel">Artikel</a></li>
            </ul>
        </li>
        <li>
            <a href="/admin">
                <i class='bx bx-arrow-back'></i>
                <span class="link_name">Logout</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="Logout">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>

@yield('content')
<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    $('.nav').on("click", function() {
        $('nav').removeClass('active');
        $(this).addClass('active');
    })
</script>
@endsection