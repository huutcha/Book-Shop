@extends('backend.layouts.main')

@section('title')
    Sub Categories
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
            <th>Category ID</th>
            <th>Action</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{$sub_category->id}}</td>
                <td>{{$sub_category->name}}</td>
                <td>{{$sub_category->category_id}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('categories/'.$category->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{ url('categories/'.$category->id.'/edit')}}">Edit</a>
                    <form method="POST" action="{{url('categories/'.$category->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
