<!DOCTYPE html>
<html>

<head>
    <title> Laporan Data Tamu</title>
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
    <center>
        <h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
            <h6><a target="_blank"
                    href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a>
        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Keperluan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($datatamu as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->no_telp }}</td>
                    <td>{{ $p->keperluan }}</td>
                    <td>{{ $p->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
