<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ini halaman Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Ini halaman Detail</h1>
    <div class="container">
        <div class="mt-5">
            <h2 class="text-center">{{ $blog->title }}</h2>
            <div class="body-blog">
                <p>
                    {{ $blog->description }}
                </p>
                <div class="d-flex flex-column align-items-end">
                    <div>{{ $blog->created_at }}</div>
                    <div>By Admin</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
