@extends('layout')

@section('content')
<section id="dashboard" class="services ">
    <div class="container">

        <div class="section-title pt-5" data-aos="fade-up">
            <h2>Daftar Peserta</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="icon-box" data-aos="fade-up">
                    <table id="peserta_table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>POSISI</th>
                                <th>NIP</th>
                                <th>SATUAN KERJA</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_peserta as $peserta)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peserta->nama }}</td>
                                    <td>{{ $peserta->nip }}</td>
                                    <td>{{ $peserta->posisi_yang_dipilih }}</td>
                                    <td>{{ $peserta->satuan_kerja }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mb-1">detail</a>
                                        <a href="#" class="btn btn-secondary shadow btn-xs sharp mb-1">dokumen</a>
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
        $('#peserta_table').DataTable();
    });
</script>
@endsection

