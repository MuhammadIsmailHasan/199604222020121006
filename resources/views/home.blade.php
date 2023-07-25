@extends('layout')

@section('header')
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
    <h1>Selamat Datang</h1>
    <h2>Rekrutmen Tim Development Mahkamah Agung RI Tahun 2023</h2>
    <a href="#dashboard" class="btn-get-started scrollto">Dashboard</a>
    </div>
</section>
@endsection

@section('content')
<section id="about" class="about">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-11">
                <div class="row justify-content-end">

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box py-5">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" class="purecounter">0</span>
                    <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box py-5">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" class="purecounter">0</span>
                    <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box pb-5 pt-0 pt-lg-5">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="27" class="purecounter">0</span>
                    <p>Years of experience</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box pb-5 pt-0 pt-lg-5">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="22" class="purecounter">0</span>
                    <p>Awards</p>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>
    
<section id="dashboard" class="services ">
    <div class="container">

        <div class="section-title pt-5" data-aos="fade-up">
            <h2>Dashboard</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

