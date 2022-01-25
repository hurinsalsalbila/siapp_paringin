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
                    <span style="font-size:10pt;"><b>Jl. Tes Raya Bypass RT. 1 Kel. Murung Pudak Telp.(0274) 513036
                            Fax. 561690</b><br /><b>
                            website : www.kecparingin.balangankab.go.id email : kecparingin@yahoo.com</b></span>
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
                <th>No Berkas</th>
                <th>Alamat Pengirim</th>
                <th>Nomor Surat</th>
                <th>Tanggal Surat</th>
                <th>Perihal</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($cetaklaporan as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->no_telp }}</td>
                    <td>{{ $p->alamat_usaha }}</td>
                    <td>{{ $p->jenis_reklame }}</td>
                    <td>{{ $p->nama_toko }}</td>
                    <td>{{ $p->ukuran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
