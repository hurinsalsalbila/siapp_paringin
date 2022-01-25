@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Edit Surat Keluar') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Edit Surat Keluar</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Surat Keluar</h4>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('admin.suratkeluar.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>No. Surat</label>
                    <input type="text" class="form-control" id="no_surat" name="no_surat">
                </div>
                <div class="form-group">
                    <label>Tanggal Surat</label>
                    <input type="date" class="form-control datemask" placeholder="" name="tgl_surat" id="tgl_surat">
                </div>
                <div class="form-group">
                    <label>Bidang</label>
                    <select class="form-control selectric" id="bidang" name="bidang">
                        <option value="Sekretariat">Sekretariat</option>
                        <option value="Data">Data</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Perihal</label>
                    <input type="text" class="form-control" name="perihal" id="perihal">
                </div>
                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="date" class="form-control datemask" name="tgl_masuk" id="tgl_masuk" placeholder="">
                </div>
                <div class="form-group">
                    <label>File</label>
                    <input type="file" class="form-control purchase-code" name="file_surat" id="file_surat"
                        placeholder="ASDF-GHIJ-KLMN-OPQR">
                </div>

                <input class="btn btn-primary" type="submit" value="Save" />
                <button type="submit" class="btn btn-danger">Kembali</button>
            </form>
        </div>
    </div>
@endsection
