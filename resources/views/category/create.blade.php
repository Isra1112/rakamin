@extends('layouts.app')

@section('content')
    <div class="card card-primary m-4 ">
        <div class="card-header">
            <h3 class="card-title">Create Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/category" method="POST">
            @csrf
            <div class="card-body w-25">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="name" value="{{ old('name', '') }}" name="name"
                        placeholder="Enter Name">
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
