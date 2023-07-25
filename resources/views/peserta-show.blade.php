@extends('layout')

@section('content')
<section id="dashboard" class="services ">
    <div class="container">

        <div class="section-title pt-5" data-aos="fade-up">
            <h2>Data Detail Peserta</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="icon-box" data-aos="fade-up">
                    <table id="peserta_table" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td style="width: 25%">NAMA</td>
                                <th>{{  htmlspecialchars($peserta->nama) }}</th>
                                <td style="width: 25%">NIP</td>
                                <th>{{  htmlspecialchars($peserta->nip) }}</th>
                            </tr>
                            <tr>
                                <td>SATUAN KERJA</td>
                                <th>{{  htmlspecialchars($peserta->satuan_kerja) }}</th>
                                <td>TANGGAL DAFTAR</td>
                                <th>{{  htmlspecialchars($peserta->timestamp) }}</th>
                            </tr>
                            <tr>
                                <td>POSISI</td>
                                <th>{{  htmlspecialchars($peserta->posisi_yang_dipilih) }}</th>
                                <td>BAHASA YANG DIKUASAI</td>
                                <th>{{  htmlspecialchars($peserta->bahasa_pemrograman_yang_dikuasai) }}</th>
                            </tr>
                            <tr>
                                <td>DATABASE YANG DIKUASAI</td>
                                <th>{{  htmlspecialchars($peserta->database_yang_dikuasai) }}</th>
                                <td>TOOLS YANG DIKUASAI</td>
                                <th>{{  htmlspecialchars($peserta->tools_yang_dikuasai) }}</th>
                            </tr>
                            <tr>
                                <td>FRAMEWORK YANG DIKUASAI</td>
                                <th>{{  htmlspecialchars($peserta->framework_bahasa_pemrograman_yang_dikuasai) }}</th>
                                <td>MENGUASAI MOBILE DEV</td>
                                <th>{{  htmlspecialchars($peserta->pernah_membuat_mobile_apps) }}</th>
                            </tr>
                        </thead>
                    </table>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 5%">NO</th>
                                <th>JENIS</th>
                                <th style="width: 70%">NILAI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peserta->nilai as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ htmlspecialchars($item->jenis_attr) }}</td>
                                    <td>
                                        @if ($item->jenis_attr == 'url_file')
                                            <a href="{{ $item->value }}" target="_blank" rel="Link pdf">klik untuk melihat dokumen</a>
                                        @else
                                            {{ $item->value == null ? '-' : htmlspecialchars($item->value) }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function() {

    });
</script>
@endsection

