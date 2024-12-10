<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Begin</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f3f4f6; /* Latar belakang abu lembut */
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    display: flex;
    gap: 20px;
    padding: 20px;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
    color: #2c3e50;
}

.card h3 {
    font-size: 1.2em;
    color: #4a7c59; /* Hijau tua */
    border-bottom: 2px solid #f2a365; /* Orange lembut */
    padding-bottom: 10px;
    margin-bottom: 15px;
}

.card ol {
    list-style-type: decimal;
    padding-left: 20px;
}

.card li {
    margin: 10px 0;
}

.card ul {
    list-style-type: none;
    padding-left: 15px;
}

.card ul li {
    margin: 5px 0;
    font-size: 0.9em;
}

.card li span {
    color: #444;
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
        gap: 10px;
    }

    .card {
        width: 100%;
    }
}
</style>
</head>

<body>
    <div class="container">
        {{-- Data Kota --}}
        <div class="card">
            <h3>Data Kota</h3>
            <ol>
                @foreach ($kota as $k)
                    <li>Nama Kota : {{ $k->nama }}</li>
                    <ul>
                        <li>Jumlah : {{ $k->jumlah_penduduk }}</li>
                    </ul>
                @endforeach
            </ol>
        </div>
        {{-- Data Pesantren --}}
        <div class="card">
            <h3>Data Pesantren</h3>
            <ol>
                @foreach ($pesantren as $p)
                    <li> Nama Pesantren : {{ $p->nama }} </li>
                    <ul>
                        <li>Email : {{ $p->email }}</li>
                        <li>Alamat : {{ $p->alamat }}</li>
                        <li>No. Rek : {{ $p->no_rek }}</li>
                        <li>Jumlah Santri : {{ $p->jumlah_santri }}</li>
                    </ul>
                @endforeach
            </ol>
        </div>
        <div class="card">
            <h3>Data Santri</h3>
            <ol>
                @foreach ($user as $s)
                    <li> Nama Santri : {{ $s->nama }} </li>
                    <ul>
                        <li>Email : {{ $s->email }}</li>
                        <li>id_pesantren : {{ $p->id_pesantren }}</li>
                        <li>Password : {{ substr($s->password, 0, 3) }}****</li>
                    </ul>
                @endforeach
            </ol>
        </div>
    </div>
</body>

</html>
