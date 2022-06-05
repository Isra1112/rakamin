@extends('layouts.app')

@section('content')
<div class="container w-100 my-5 mx-10">
        <h2>Edit cast {{ $category->id }}</h2>
        <form action="/category/{{ $category->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label for="nama">nama</label>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}" id="name"
                    placeholder="Masukkan nama">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary my-3">Edit</button>
        </form>
    </div>
@endsection
