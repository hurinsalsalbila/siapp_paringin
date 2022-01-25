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
            <h4>Edit Surat Laporan Kependudukan</h4>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('admin.lapkependudukan.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Kelurahan</label>
                    <input type="text" required class="form-control" id="kelurahan" name="kelurahan">
                </div>
                <div class="form-group">
                    <label>Laki - Laki</label>
                    <input type="number" required class="form-control" id="laki_laki" name="laki_laki">
                </div>
                <div class="form-group">
                    <label>Perempuan</label>
                    <input type="number" required class="form-control" id="perempuan" name="perempuan">
                </div>
                <div class="form-group">
                    <label>Jumlah KK</label>
                    <input type="number" required class="form-control" id="jml_kk" name="jml_kk">
                </div>
                <div class="form-group">
                    <label>Jumlah Anggota</label>
                    <input type="number" required class="form-control" id="jml_anggota" name="jml_anggota">
                </div>
                <div class="form-group">
                    <label>Jumlah Jiwa</label>
                    <input type="number" required class="form-control" id="jml_jiwa" name="jml_jiwa">
                </div>
                <div class="form-group">
                    <label>Lahir</label>
                    <input type="number" required class="form-control" id="lahir" name="lahir">
                </div>
                <div class="form-group">
                    <label>Datang</label>
                    <input type="number" required class="form-control" id="datang" name="datang">
                </div>
                <div class="form-group">
                    <label>Meninggal</label>
                    <input type="number" required class="form-control" id="meninggal" name="meninggal">
                </div>
                <div class="form-group">
                    <label>Pindah</label>
                    <input type="number" required class="form-control" id="pindah" name="pindah">
                </div>
                <div class="form-group">
                    <label>Jumlah Penduduk Akhir Bulan</label>
                    <input type="number" class="form-control" id="jml_pendudukakhirbulan" name="jml_pendudukakhirbulan">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="ket" id="ket">
                </div>
                <input class="btn btn-primary" type="submit" value="Save" />
                <button type="submit" class="btn btn-danger">Kembali</button>
            </form>
        </div>
    </div>
@endsection
