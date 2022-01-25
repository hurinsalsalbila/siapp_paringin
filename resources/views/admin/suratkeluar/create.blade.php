@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Surat Keluar') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Surat Keluar</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Input Surat Keluar</h4>
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
                    <input type="text" class="form-control" id="no_surat" name="no_surat" readonly
                        value="{{ $nomer }}">
                    @if ($errors->has('no_surat'))
                        <!-- form validation --> <span class="invalid-feedback">{{ $errors->first('no_surat') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Tanggal Surat</label>
                    <input type="date" class="form-control datemask" placeholder="" name="tgl_surat" id="tgl_surat"
                        required>
                    @if ($errors->has('tgl_surat'))
                        <!-- form validation --> <span class="invalid-feedback">{{ $errors->first('tgl_surat') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Bidang</label>
                    <select class="form-control selectric" id="bidang" name="bidang" onchange="ubah()">
                        @foreach ($bidang as $b)
                            <option value="{{ $b->nama_bidang }}">{{ $b->nama_bidang }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('bidang'))
                        <!-- form validation --> <span class="invalid-feedback">{{ $errors->first('bidang') }}</span>
                    @endif
                </div>
                <script>
                    function ubah(e) {
                        var bidang = document.querySelector('#bidang').value
                        var data = "{{ $nomer }}";
                        data = data.replace('$', bidang);
                        document.querySelector('#no_surat').value = data;
                        console.log(data)
                    }
                </script>
                <div class="form-group">
                    <label>Perihal</label>
                    <input type="text" class="form-control" name="perihal" id="perihal" required>
                    @if ($errors->has('perihal'))
                        <!-- form validation --> <span class="invalid-feedback">{{ $errors->first('perihal') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="date" class="form-control datemask" name="tgl_masuk" id="tgl_masuk" placeholder=""
                        required>
                    @if ($errors->has('tgl_masuk'))
                        <!-- form validation --> <span class="invalid-feedback">{{ $errors->first('tgl_masuk') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>File</label>
                    <input type="file" class="form-control purchase-code" name="file_surat" id="file_surat"
                        placeholder="ASDF-GHIJ-KLMN-OPQR">
                    @if ($errors->has('file_surat'))
                        <!-- form validation --> <span class="invalid-feedback">{{ $errors->first('file_surat') }}</span>
                    @endif
                </div>
                <input class="btn btn-primary" type="submit" value="Save" />
                <button type="submit" class="btn btn-danger">Kembali</button>
            </form>
        </div>
    </div>
@endsection
