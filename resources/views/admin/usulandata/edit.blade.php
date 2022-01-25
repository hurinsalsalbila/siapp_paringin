@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Surat Usulan Data Pelaku Usaha') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Surat Usulan Data Pelaku Usaha</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Input Surat Usulan Data Pelaku Usaha</h4>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('admin.usulandata.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>No Surat</label>
                    <input type="text" required class="form-control" id="no_surat" name="no_surat">
                </div>
                <div class="form-group">
                    <label>Tanggal Surat</label>
                    <input type="date" required class="form-control" id="tgl_surat" name="tgl_surat">
                </div>
                <div class="form-group">
                    <label>Perihal</label>
                    <input type="textarea" required class="form-control" id="perihal" name="perihal">
                </div>
                <input class="btn btn-primary" type="submit" value="Save" />
                <button type="submit" class="btn btn-danger">Kembali</button>
            </form>
        </div>
    </div>
@endsection
