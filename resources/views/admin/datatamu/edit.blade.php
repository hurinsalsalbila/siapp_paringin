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
        <div class="col-md-6">
            <div class="card-header">
                <h4>Input Data Tamu</h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card-body">
                <form method="POST" action="{{ route('admin.datatamu.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control datemask" placeholder="" name="tanggal" id="tanggal">
                        @if ($errors->has('tanggal'))
                            <!-- form validation --> <span class="invalid-feedback">{{ $errors->first('tanggal') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="">
                        @if ($errors->has('nama'))
                            <!-- form validation --> <span class="invalid-feedback">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="summernote-simple form-control" id="alamat" name="alamat"></textarea>
                    </div>
                    {{-- <script>
                function ubah(e) {
                    var bidang = document.querySelector('#bidang').value
                    var data = "{{ $nomer }}";
                    data = data.replace('$', bidang);
                    document.querySelector('#no_surat').value = data;
                    console.log(data)
                }
            </script> --}}
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" class="form-control" name="no_telp" id="no_telp">
                        @if ($errors->has('no_telp'))
                            <!-- form validation --> <span class="invalid-feedback">{{ $errors->first('no_telp') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Keperluan</label>
                        <input type="tect" class="form-control datemask" name="keperluan" id="keperluan" placeholder="">
                        @if ($errors->has('keperluan'))
                            <!-- form validation --> <span
                                class="invalid-feedback">{{ $errors->first('keperluan') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control purchase-code" name="keterangan" id="keterangan"
                            placeholder="">
                        @if ($errors->has('keterangan'))
                            <!-- form validation --> <span
                                class="invalid-feedback">{{ $errors->first('keterangan') }}</span>
                        @endif
                    </div>
                    <input class="btn btn-primary" type="submit" value="Save" />
                    <button type="submit" class="btn btn-danger">Kembali</button>
                </form>
            </div>
        </div>
    </div>
@endsection
