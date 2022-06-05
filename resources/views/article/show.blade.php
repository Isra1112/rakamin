@extends('layouts.app')

@section('content')
    <div class="container w-100 my-5 mx-10">
        <div class="card  my-3 mx-3 d-flex" style="padding: 0px 1px">
            <img src="{{ $articles->image }}" class="card-img-top" alt="Max-width 100%">
            <div class="card-body">
                <h5 class="card-title">{{ $articles->title }}</h5>
                <p class="card-text">{{ $articles->content }}</p>
                <a href="/article/{{ $articles->id }}/edit" class="btn btn-primary">Update</a>
                <form action="/article/{{ $articles->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                </form>
            </div>
        </div>
    </div>
@endsection
