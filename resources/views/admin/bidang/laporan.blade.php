@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Laporan Bidang') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Laporan Bidang</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content">
        <div class="card-header">
            <h3>Print Data Bidang</h3>
        </div>
        <div class="card-body">
            <div class="input-group mb-3">
                <label for="label">Tanggal Awal</label>
                <input type="date" name="tglawal" id="tglawal" class="form-control">
            </div>
            <div class="input-group mb-3">
                <label for="label">Tanggal Akhir</label>
                <input type="date" name="tglakhir" id="tglakhir" class="form-control">
            </div>
            <div class="input-group mb-3">
                <a href=""
                    onclick="this.href='/admin/bidang/cetak-pertanggal/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                    target="_blank" class="btn btn-primary col-md-12">Cetak laporan Pertanggal <i
                        class="fas fa-print"></i></a>
            </div>
        </div>
    </div>
@endsection
