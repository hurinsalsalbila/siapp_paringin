@extends('layouts.app')
@section('breadcrumb')
    <div class="section-header">
        <h1>{{ __('Data Magang') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data Magang</a></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="col-md-6">
            <div class="card-header">
                <h4>Input Data Magang</h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card-body">
                <form method="POST" action="{{ route('admin.datamagang.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control datemask" placeholder="" name="tanggal" id="tanggal">
                        @if ($errors->has('tanggal'))
                            <!-- form validation --> <span class="help-block">{{ $errors->first('tanggal') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value=""">  
                                                                         @if ($errors->has('nama'))
                        <!-- form validation --> <span class="help-block">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Sekolah</label>
                        <input type="text" class="form-control" id="sekolah" name="sekolah" value=""">  
                                                                         @if ($errors->has('sekolah'))
                        <!-- form validation --> <span class="help-block">{{ $errors->first('sekolah') }}</span>
                        @endif
                    </div>
                    {{-- <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="summernote-simple form-control" id="alamat" name="alamat"></textarea>
                    </div> --}}
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
                            <!-- form validation --> <span class="help-block">{{ $errors->first('no_telp') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Keperluan</label>
                        <input type="tect" class="form-control datemask" name="keperluan" id="keperluan" placeholder="">
                        @if ($errors->has('keperluan'))
                            <!-- form validation --> <span class="help-block">{{ $errors->first('keperluan') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>bidang</label>
                        <input type="text" class="form-control purchase-code" name="bidang" id="bidang" placeholder="">
                        @if ($errors->has('bidang'))
                            <!-- form validation --> <span class="help-block">{{ $errors->first('bidang') }}</span>
                        @endif
                    </div>
                    <input class="btn btn-primary" type="submit" value="Simpan" />
                    <button type="submit" class="btn btn-danger">Kembali</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Data Table --}}
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Magang</h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-md-12">
                {{-- <a href="{{ route('admin.datamagang.create') }}" class="btn btn-primary">Tambah Data</a> --}}
                <a href="{{ route('admin.datamagang.cetakpdf') }}" class="btn btn-success" target="_blank">CETAK PDF</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Sekolah</th>
                                <th>No Telp</th>
                                <th>Keperluan</th>
                                <th>Bidang</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($datamagang as $ids)
                                <tr>
                                    <td>{{ $ids->tanggal }}</td>
                                    <td>{{ $ids->nama }}</td>
                                    <td>{{ $ids->sekolah }}</td>
                                    <td>{{ $ids->no_telp }}</td>
                                    <td>{{ $ids->keperluan }}</td>
                                    <td>{{ $ids->bidang }}</td>
                                    <td>
                                        <a href="/admin/datamagang/edit/{{ $ids->id_magang }}"
                                            class="btn btn-info">Edit</a>
                                        <a href="/admin/datamagang/hapus/{{ $ids->id_magang }}"
                                            class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
