@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Surat Laporan Kependudukan') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Surat Laporan Kependudukan</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Input Surat Laporan Kependudukan</h4>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('admin.dispensasinikah.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>No Surat</label>
                    <input type="text" required class="form-control" id="no_surat" name="no_surat">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" required class="form-control" id="tanggal" name="tanggal">
                </div>
                <div class="form-group">
                    <label>Perihal</label>
                    <input type="textarea" required class="form-control" id="perihal" name="perihal">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" required class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label>Tempat Tanggal Lahir</label>
                    <input type="date" required class="form-control" id="ttl" name="ttl">
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control selectric" id="agama" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghuchu">Konghuchu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" required class="form-control" id="pekerjaan" name="pekerjaan">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" required class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" required class="form-control" id="status" name="status">
                </div>

                <input class="btn btn-primary" type="submit" value="Save" />
                <button type="submit" class="btn btn-danger">Kembali</button>
            </form>
        </div>
    </div>
@endsection
