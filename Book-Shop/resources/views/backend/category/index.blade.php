@extends('backend.layouts.main')

@section('title')
    Categories
@endsection

@push('css')
    <link rel="stylesheet" href="#" />
@endpush

@push('js')

@endpush

@section('content')
    <table class="table table-striped table-dark">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('admin/categories/'.$category->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{ url('admin/categories/'.$category->id.'/edit')}}">Edit</a>
                    <form method="POST" action="{{url('admin/categories/'.$category->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
