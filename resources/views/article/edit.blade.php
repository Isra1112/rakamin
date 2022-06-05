@extends('layouts.app')

@section('content')
<div class="container w-100 my-5 mx-10">
    <h2>Edit Article {{ $article->id }}</h2>
    <form action="/article/{{ $article->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group w-25">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title" value="{{ $article->title }}" id="title"
                placeholder="Masukkan Title">
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" value="{{ $article->content }}" id="content"
                placeholder="Masukkan content">
            @error('content')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-3">Edit</button>
    </form>
</div>
@endsection