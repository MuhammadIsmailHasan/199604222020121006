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
                                <th>NIP</th>
                                <th>POSISI</th>
                                <th>SATUAN KERJA</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_peserta as $peserta)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ htmlspecialchars($peserta->nama) }}</td>
                                    <td>{{ htmlspecialchars($peserta->nip) }}</td>
                                    <td>{{ htmlspecialchars($peserta->posisi_yang_dipilih) }}</td>
                                    <td>{{ htmlspecialchars($peserta->satuan_kerja) }}</td>
                                    <td>
                                        <a type="button" href="{{ route('daftar-peserta.show', $peserta->id) }}" class="btn btn-primary shadow btn-xs sharp mb-1">detail</a>
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

