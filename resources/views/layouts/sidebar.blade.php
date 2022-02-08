<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="{{ asset('assets/img/ bal.png') }}" width="20px" alt="">
            <a href="">SIAPP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href=""></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="/home" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Master</li>
            @if (auth()->user()->is_admin == 1)
                {{-- <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Master</span></a>
                <ul class="dropdown-menu"> --}}
                {{-- <li><a class="nav-link" href="/admin/bidang">Bidang</a>
                        <li><a class="nav-link" href="{{ route('admin.suratmasuk') }} ">Surat Masuk</a>
                        <li><a class="nav-link" href="{{ route('admin.suratkeluar') }}">Surat Keluar</a>
                        <li><a class="nav-link" href="/admin/datatamu">Data Tamu</a>
                        <li><a class="nav-link" href="{{ route('admin.datalpse') }} ">Data LPSE</a>
                        <li><a class="nav-link" href="{{ route('admin.datamagang') }}">Data Magang</a>
                        <li><a class="nav-link" href="{{ route('admin.skpd') }}">SKPD</a> --}}
                {{-- </ul>
            </li> --}}
                <li><a class="nav-link" href="{{ route('admin.suratmasuk') }}"><i
                            class="far fa-file-alt"></i>Surat
                        Masuk</a>
                <li><a class="nav-link" href="{{ route('admin.suratrekomendasi') }}"><i
                            class="fas fa-plug"></i>
                        Rekommendasi</a></li>
                <li><a class="nav-link" href="{{ route('admin.usulandata') }}"><i
                            class="fas fa-exclamation"></i>Usulan
                        Data Pelaku
                    </a></li>
                <li><a class="nav-link" href="{{ route('admin.lapkependudukan') }}"><i
                            class="fas fa-ellipsis-h"></i>Laporan
                        Kependudukan</a></li>
                <li><a class="nav-link" href="{{ route('admin.dispensasinikah') }}"><i
                            class="fas fa-pencil-ruler"></i>Dispensasi
                        Nikah</a></li>

            @else
                <li><a class="nav-link" href="{{ route('admin.suratmasuk') }}">Surat Masuk</a>
                </li>
            @endif
            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Laporan</span></a>
                <ul class="dropdown-menu">
                    @if (auth()->user()->is_admin == 1)
                        <li><a class="nav-link" href="{{ route('admin.suratrekomendasi.laporan') }}">lap.
                                Surat Rekomendasi</a>
                        <li><a class="nav-link" href="{{ route('admin.suratmasuk.laporan') }}">laporan Surat
                                Masuk</a>
                        <li><a class="nav-link" href="{{ route('admin.lapkependudukan.laporan') }}">laporan
                                Kependudukan</a>
                        <li><a class="nav-link" href="{{ route('admin.dispensasinikah.laporan') }}">laporan
                                Dispensasi Nikah</a>
                        <li><a class="nav-link" href="{{ route('admin.usulandata.laporan') }}">laporan
                                Usulan Data</a>
                        @else
                        <li><a class="nav-link" href="{{ route('admin.dispensasinikah.laporan') }}">Laporan
                                Dispensasi Nikah
                            </a>
                        </li>
                        <li><a class="nav-link" href="{{ route('admin.suratrekomendasi.laporan') }}">lap.
                                Surat Rekomendasi</a>
                        <li><a class="nav-link" href="{{ route('admin.suratmasuk.laporan') }}">laporan Surat
                                Masuk</a>
                        <li><a class="nav-link" href="{{ route('admin.lapkependudukan.laporan') }}">laporan
                                Kependudukan</a>
                        <li><a class="nav-link" href="{{ route('admin.usulandata.laporan') }}">laporan
                                Usulan Data</a>
                    @endif
                </ul>
            </li>
        </ul>
    </aside>
</div>
