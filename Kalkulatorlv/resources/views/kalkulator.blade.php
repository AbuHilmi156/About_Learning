@extends('layouts.app')
@section('title', 'Kalkulator laravel')
@section('header', 'Kalkulator')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
<h4>Terjadi Kesalahan</h4>
<hr>
<ul>
    @foreach ($errors->all() as $error )
    <li>{{ $error }}</li>
    @endforeach
</ul>
</div>

@endif
    <form action="/kalkulator" method="POST">
        @csrf
        <div class="mb-3">
            <label for="angka1" class="form-label">Angka 1</label>
            <input type="number" class="form-control" id="angka1" name="angka1" value="{{ old('angka1') }}">
        </div>
        <div class="mb-3">
            <label for="angka2" class="form-label">Angka 2</label>
            <input type="number" class="form-control" id="angka2" name="angka2"value="{{ old('angka2') }}">
        </div>
        <h2>Hasil :
            @isset($hasil)
                {{ $hasil }}
            @endisset
        </h2>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
