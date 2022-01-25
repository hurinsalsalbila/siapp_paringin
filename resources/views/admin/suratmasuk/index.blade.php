@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Surat Masuk') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Surat Masuk</a></div>
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
                <h4>Surat Masuk</h4>
            </div>
            <div class="col-md-12">
                <a href="{{ route('admin.suratmasuk.create') }}" class="btn btn-primary">Tambah Data</a>
                <a href="{{ route('admin.suratmasuk.cetakpdf') }}" class="btn btn-success" target="_blank">CETAK PDF</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>No. Urut</th>
                                <th>No. Berkas</th>
                                <th>Alamat Pengirim</th>
                                <th>No Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Perihal</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($id as $ids)
                                <?php $no = 1; ?>
                                <tr>
                                    <td>{{ $ids->id }}</td>
                                    <td>{{ $ids->no_berkas }}</td>
                                    <td>{{ $ids->alamat_pengirim }}</td>
                                    <td>{{ $ids->no_surat }}</td>
                                    <td>{{ $ids->tgl_surat }}</td>
                                    <td>{{ $ids->perihal }}</td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('admin.suratmasuk.destroy', $ids->id) }}" method="POST">
                                            <a href="{{ route('admin.suratmasuk.edit', $ids->id) }}"
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
