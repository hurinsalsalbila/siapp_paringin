<!DOCTYPE html>
<html>

<head>
    <title> DOMPDF Laravel</title>
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
        <h5> DOMPDF Laravel</h4>
            <h6>
        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>No Surat</th>
                {{-- <th>Bidang</th> --}}
                <th>Tanggal Surat</th>
                <th>Tanggal Masuk</th>
                <th>Perihal</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($suratmasuk as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->no_surat }}</td>
                    {{-- <td>{{ $p->bidang }}</td> --}}
                    <td>{{ $p->tgl_surat }}</td>
                    <td>{{ $p->tgl_masuk }}</td>
                    <td>{{ $p->perihal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
