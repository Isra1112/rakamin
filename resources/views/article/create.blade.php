@extends('layouts.app')

@section('content')
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Create Article</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/article" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" value="{{ old('title', '') }}" name="title"
                        placeholder="Enter Title">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" value="{{ old('content', '') }}" name="content"
                        placeholder="Enter Content">
                </div>
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    @endsection
