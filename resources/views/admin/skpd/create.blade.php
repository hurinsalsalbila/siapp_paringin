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
        <div class="col-md-6">
            <div class="card-header">
                <h4>Input Data SKPD</h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card-body">
                <form method="POST" action="{{ route('admin.skpd.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="skpd_nama" name="skpd_nama" value="">
                        @if ($errors->has('skpd_nama'))
                            <!-- form validation --> <span
                                class="invalid-feedback">{{ $errors->first('skpd_nama') }}</span>
                        @endif
                    </div>
                    <input class="btn btn-primary" type="submit" value="Simpan" />
                    <button type="submit" class="btn btn-danger">Kembali</button>
                </form>
            </div>
        </div>
    </div>
@endsection
