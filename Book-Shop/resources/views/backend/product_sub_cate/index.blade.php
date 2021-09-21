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
            <th>Product_id</th>
            <th>Sub_categories_id</th>
            <th>Action</th>
        </tr>
        @foreach ($product_sub_cates as $product_sub_cate)
            <tr>
                <td>{{$product_sub_cate->product_id}}</td>
                <td>{{$product_sub_cate->sub_categories_id}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('admin/product_sub_cates/'.$product_sub_cate->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{ url('admin/product_sub_cates/'.$product_sub_cate->id.'/edit')}}">Edit</a>
                    <form method="POST" action="{{url('admin/product_sub_cates/'.$product_sub_cate->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
