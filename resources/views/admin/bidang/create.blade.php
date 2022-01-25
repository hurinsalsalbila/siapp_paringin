@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Bidang') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Bidang</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Input Bidang</h4>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('admin.bidang.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Bidang</label>
                    <input type="text" class="form-control" id="nama_bidang" name="nama_bidang" required
                        title="Lütfen işaretli yerleri doldurunuz">
                </div>
                <input class="btn btn-primary" type="submit" value="Save" />
                <a href="{{ route('admin.bidang.index') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
@endsection
