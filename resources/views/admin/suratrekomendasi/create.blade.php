@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Surat Rekomendasi') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Surat Rekomendasi</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Input Surat Rekomendasi</h4>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('admin.suratrekomendasi.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" required class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" required class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="numeric" required class="form-control" id="no_telp" name="no_telp">
                </div>
                <div class="form-group">
                    <label>Alamat Usaha</label>
                    <input type="text" required class="form-control" id="alamat_usaha" name="alamat_usaha">
                </div>
                <div class="form-group">
                    <label>Jenis Reklame</label>
                    <input type="text" required class="form-control" id="jenis_reklame" name="jenis_reklame">
                </div>
                <div class="form-group">
                    <label>Nama Toko</label>
                    <input type="text" required class="form-control" id="nama_toko" name="nama_toko">
                </div>
                <div class="form-group">
                    <label>Ukuran</label>
                    <input type="text" required class="form-control" id="ukuran" name="ukuran">
                </div>
                <div class="form-group">
                    <label>Periode</label>
                    <input type="date" required class="form-control" id="periode" name="periode">
                </div>
                <div class="form-group">
                    <label>Alamat Toko</label>
                    <input type="text" required class="form-control" id="alamat_toko" name="alamat_toko">
                </div>
                {{-- <div class="form-group">
                    <label>No. Surat</label>
                    <input type="text" class="form-control" id="no_surat" name="no_surat">
                </div> --}}
                {{-- <div class="form-group">
                    <label>Alamat Pengirim</label>
                    <input type="text" class="form-control" name="alamat_pengirim" id="alamat_pengirim">
                </div>
                <div class="form-group">
                    <label>Tanggal Surat</label>
                    <input type="date" class="form-control datemask" placeholder="" name="tgl_surat" id="tgl_surat">
                </div>

                <div class="form-group">
                    <label>Perihal</label>
                    <input type="text" class="form-control" name="perihal" id="perihal">
                </div> --}}
                {{-- <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="date" class="form-control datemask" name="tgl_masuk" id="tgl_masuk" placeholder="">
                </div>
                <div class="form-group">
                    <label>File</label>
                    <input type="file" class="form-control purchase-code" name="file_surat" id="file_surat" placeholder="">
                </div> --}}

                <input class="btn btn-primary" type="submit" value="Save" />
                <button type="submit" class="btn btn-danger">Kembali</button>
            </form>
        </div>
    </div>
@endsection
