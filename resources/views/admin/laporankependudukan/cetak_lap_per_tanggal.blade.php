<!DOCTYPE html>
<html>

<head>
    <title>Laporan per tanggal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>
    <table align="center">
        <tr>
            <th><img src="{{ asset('images') }}/balangan.png" width="50%">
            </th>
            <td>
                <center>
                    <font size="4"><b>
                            PEMERINTAH DAERAH KABUPATEN BALANGAN</b><br />
                        <b>KECAMATAN PARINGIN SELATAN</b>
                    </font><br />
                    <span style="font-size:10pt;"><b>Jl. Ahmad Yani Paringin Telp.(0526) 2094137
                            Kodepos 71611</b><br /></span>
            </td>
            <th>
            </th>
            </center>
        <tr>
            <td colspan="4">
                <hr size="2">
            </td>
        </tr>
        </tr>
    </table>
    <table class='table table-striped table-bordered table-hover'>
        <thead>
            <tr>
                <th>No</th>
                <th>Kelurahan</th>
                <th>Laki-Laki</th>
                <th>Perempuan</th>
                <th>Jumlah KK</th>
                <th>Jumlah Anggota</th>
                <th>Jumlah Jiwa</th>
                <th>Lahir</th>
                <th>Datang</th>
                <th>Meninggal</th>
                <th>Pindah</th>
                <th>Keterangan</th>
                <th>Jumlah Penduduk Akhir Bulan</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($cetaklaporan as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->kelurahan }}</td>
                    <td>{{ $p->laki_laki }}</td>
                    <td>{{ $p->perempuan }}</td>
                    <td>{{ $p->jml_kk }}</td>
                    <td>{{ $p->jml_anggota }}</td>
                    <td>{{ $p->jml_jiwa }}</td>
                    <td>{{ $p->lahir }}</td>
                    <td>{{ $p->datang }}</td>
                    <td>{{ $p->meninggal }}</td>
                    <td>{{ $p->pindah }}</td>
                    <td>{{ $p->ket }}</td>
                    <td>{{ $p->jml_pendudukakhirbulan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
