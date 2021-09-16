@extends('backend.layouts.main')

@section('title')
    Product Infomation
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
            <th>Author</th>
            <th>Published</th>
            <th>Language</th>
            <th>Year</th>
            <th>Product_id</th>
            <th>Action</th>
        </tr>
        @foreach ($product_infomations as $product_infomation)
            <tr>
                <td>{{$product_infomation->id}}</td>
                <td>{{$product_infomation->name}}</td>
                <td>{{$product_infomation->author}}</td>
                <td>{{$product_infomation->published}}</td>
                <td>{{$product_infomation->language}}</td>
                <td>{{$product_infomation->year}}</td>
                <td>{{$product_infomation->product_id}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('admin/product_infomations/'.$product_infomation->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{ url('admin/product_infomations/'.$product_infomation->id.'/edit')}}">Edit</a>
                    <form method="POST" action="{{url('admin/product_infomations/'.$product_infomation->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
