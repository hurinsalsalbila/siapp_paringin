@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('SKPD') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">SKPD</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        {{-- Data Table --}}
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Skpd</h4>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col-md-12">
                    <a href="{{ route('admin.skpd.create') }}" class="btn btn-primary">Tambah Data</a>
                    <a href="{{ route('admin.skpd.cetakpdf') }}" class="btn btn-success" target="_blank">CETAK PDF</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tbody>
                                <tr>
                                    <th>id</th>
                                    <th>SKPD NAMA</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($id as $ids)
                                    <tr>
                                        <td>{{ $ids->skpd_id }}</td>
                                        <td>{{ $ids->skpd_nama }}</td>
                                        <td>
                                            <a href="/admin/skpd/edit/{{ $ids->skpd_id }}" class="btn btn-info">Edit</a>
                                            <a href="/admin/skpd/hapus/{{ $ids->skpd_id }}"
                                                class="btn btn-danger">Hapus</a>
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
    </div>
@endsection
