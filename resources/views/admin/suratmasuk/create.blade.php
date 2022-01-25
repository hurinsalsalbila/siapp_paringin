@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Surat masuk') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Surat masuk</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Input Surat masuk</h4>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('admin.suratmasuk.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>No. Berkas</label>
                    <input type="text" class="form-control" id="no_berkas" name="no_berkas">
                </div>
                <div class="form-group">
                    <label>No. Surat</label>
                    <input type="text" class="form-control" id="no_surat" name="no_surat">
                </div>
                <div class="form-group">
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
                </div>

                <input class="btn btn-primary" type="submit" value="Save" />
                <button type="submit" class="btn btn-danger">Kembali</button>
            </form>
        </div>
    </div>
@endsection
