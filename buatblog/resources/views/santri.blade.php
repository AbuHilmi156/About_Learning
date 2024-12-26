<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menegemen Santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <h1 class="text-center">Data Santri</h1>
                <thead align="center" valign="middle">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($santris as $santri)
                        <tr>
                            <td align="center" valign="middle">1</td>
                            <td align="left" valign="middle">{{ $santri->nama }}</td>
                            <td align="center" valign="middle">{{ $santri->kelas }}</td>
                            <td align="center" valign="middle">{{ $santri->tanggal_lahir }}</td>
                            <td align="left" valign="middle">{{ $santri->alamat }}</td>
                            <td align="left" valign="middle">view | edit | delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="mt-5">
            <h1 class="text-center">Data Santri</h1>
            <p>ini data santri :</p>
            <ol>
                @foreach ($santris as $santri)
                    <li>{{ $santri->nama }}</li>
                @endforeach
            </ol>
        </div> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
