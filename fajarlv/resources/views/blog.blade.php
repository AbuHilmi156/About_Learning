<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="mt-5">
            <h1 class="text-center">Blogs List :</h1>
            <div class="table-responsive mt-3">
                <a href="{{ url('blog/add') }}" class="btn btn-primary mb-3">Add New</a>
                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <form method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="title" value ="{{ $title }}" class="form-control"
                            placeholder="search title" aria-label="search title" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
                <table class="table table-striped table-hover">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Action</th>
                    </thead>
                    <tbody class="table-group-divider">
                        @if ($dataBlogs->count() == 0)
                            <tr>
                                <td colspan="3" class="text-center">Data tidak ditemukan dengan kata kunci
                                    "{{ $title }}"</td>
                            </tr>
                        @endif
                        @foreach ($dataBlogs as $item)
                            <tr>
                                <td>{{ ($dataBlogs->currentpage() - 1) * $dataBlogs->perpage() + $loop->index + 1 }}
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>edit | delete</td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td colspan="3">Jumlah data ditemukan : {{ $dataBlogs->count() }}</td>
                        </tr> --}}
                    </tbody>
                </table>
                <p>Jumlah data ditemukan : {{ $dataBlogs->count() }}</p>
            </div>
            {{ $dataBlogs->links() }}
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
