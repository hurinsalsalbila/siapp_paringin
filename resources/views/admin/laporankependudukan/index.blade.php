@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Laporan Kependudukan') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Laporan Kependudukan</a></div>
        </div>
    </div>
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Laporan Kependudukan</h4>
            </div>
            <div class="col-md-12">
                <a href="{{ route('admin.lapkependudukan.create') }}" class="btn btn-primary">Tambah Data</a>
                <a href="{{ route('admin.lapkependudukan.cetakpdf') }}" class="btn btn-success" target="_blank">CETAK
                    PDF</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>Kelurahan</th>
                                <th>Laki Laki</th>
                                <th>Perempuan</th>
                                <th>Jumlah KK</th>
                                <th>Jumlah Anggota</th>
                                <th>Jumlah Jiwa</th>
                                <th>Lahir</th>
                                <th>Datang</th>
                                <th>Meninggal</th>
                                <th>Pindah</th>
                                <th>Jumlah Penduduk Akhir Bulan</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($id as $id)
                                <?php $no = 1; ?>
                                <tr>
                                    <td>{{ $id->kelurahan }}</td>
                                    <td>{{ $id->laki_laki }}</td>
                                    <td>{{ $id->perempuan }}</td>
                                    <td>{{ $id->jml_kk }}</td>
                                    <td>{{ $id->jml_anggota }}</td>
                                    <td>{{ $id->jml_jiwa }}</td>
                                    <td>{{ $id->lahir }}</td>
                                    <td>{{ $id->datang }}</td>
                                    <td>{{ $id->meninggal }}</td>
                                    <td>{{ $id->pindah }}</td>
                                    <td>{{ $id->jml_pendudukakhirbulan }}</td>
                                    <td>{{ $id->ket }}</td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('admin.lapkependudukan.destroy', $id->id) }}" method="POST">
                                            <a href="{{ route('admin.lapkependudukan.edit', $id->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
