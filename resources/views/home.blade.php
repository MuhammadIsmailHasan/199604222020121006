@extends('layout')

@section('title', 'Home')

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
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box py-5">
                            <i class="bi bi-github"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $programmer }}" class="purecounter">0</span>
                            <p>Programmer</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box py-5">
                            <i class="bi bi-globe"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $sa }}" class="purecounter">0</span>
                            <p>System / Business Analyst</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box py-5">
                            <i class="bi bi-hdd-rack"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $da }}" class="purecounter">0</span>
                            <p>Database Administrator</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box py-5">
                            <i class="bi bi-laptop"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $qa }}" class="purecounter">0</span>
                            <p>Quality Assurance</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box py-5">
                            <i class="bi bi-journal-check"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $tw }}" class="purecounter">0</span>
                            <p>Technical Writer</p>
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
            <div class="col-md-12">
                <div class="icon-box" data-aos="fade-up">
                    <div id="chartContainer" style="height: 300px; width: 100%;">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

@section('js')
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>  
    <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

    <script>
        $(document).ready(function() {
            let options = {
                title: {
                    text: "Data peserta berdasarkan posisi"
                },
                data: [{
                        type: "pie",
                        startAngle: 45,
                        showInLegend: "true",
                        legendText: "{label}",
                        indexLabel: "{label} ({y})",
                        yValueFormatString:"#,##0.#"%"",
                        dataPoints: [
                            { label: "Programmer", y: {{ $programmer }} },
                            { label: "System / Business Analyst", y: {{ $sa }} },
                            { label: "Database Administrator", y: {{ $da }} },
                            { label: "Quality Assurance", y: {{ $qa }} },
                            { label: "Technical Writer", y: {{ $tw }} }
                        ]
                }]
            };
            $("#chartContainer").CanvasJSChart(options);
        });
    </script>
@endsection

