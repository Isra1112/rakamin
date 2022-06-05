@extends('layouts.app')

@section('content')
    <div class="container w-100 my-5 mx-10">
        <a href="/category/create" class="btn btn-primary">Tambah</a>
        <table class="table table-striped my-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama</th>
                    <th scope="col">User_id</th>
                    <th scope="col" style="">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($category as $key=>$value)
                    <tr>
                        <td>{{ $key + 1 }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->user_id }}</td>

                        <td>
                            {{-- <a href="/cast/{{ $value->id }}" class="btn btn-info">Show</a> --}}
                            <a href="/category/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="/category/{{ $value->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
