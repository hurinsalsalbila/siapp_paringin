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
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>No Surat</th>
                <th>Tanggal</th>
                <th>Perihal</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($cetaklaporan as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->no_surat }}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->perihal }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->ttl }}</td>
                    <td>{{ $p->agama }}</td>
                    <td>{{ $p->pekerjaan }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
