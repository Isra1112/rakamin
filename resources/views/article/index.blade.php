@extends('layouts.app')

@section('content')
    <div class="container w-100 my-5 mx-10">
        <div class="row d-flex">
            @foreach ($articles as $article)
                <div class="card col-sm-2 my-3 mx-3 d-flex" style="padding: 0px 1px">
                    <img src="{{ $article->image }}" class="card-img-top" alt="Max-width 100%" height="150px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie
                            euismod lorem, sit amet tincidunt lectus dignissim non.</p>
                        <a href="/article/{{$article->id}}" class="btn btn-primary">Detail Article</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
