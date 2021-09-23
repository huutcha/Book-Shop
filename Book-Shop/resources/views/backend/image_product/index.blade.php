@extends('backend.layouts.table')

@section('title')
    Image Products
@endsection

@push('css')
    <link rel="stylesheet" href="#" />
@endpush

@push('js')

@endpush
@section('create')
    <a href="{{url('admin/image_products/create')}}" class="btn btn-primary" style="margin-bottom: 16px">Thêm mới ảnh sản phẩm</a>
@endsection
@section('table')
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Path - Image</th>
        <th>Product_id</th>
        <th></th>
    </tr>
    @foreach ($image_products as $imageProduct)
        <tr>
            <td>{{$imageProduct->id}}</td>
            <td>{{$imageProduct->name}}</td>
            <td>{{$imageProduct->path}}</td>
            <td>{{$imageProduct->product_id}}</td>
            <td>
                <a class="btn btn-primary" href="{{ url('admin/image_products/'.$imageProduct->id)}}">Show</a>
                <a class="btn btn-primary" href="{{ url('admin/image_products/'.$imageProduct->id.'/edit')}}">Edit</a>
                <form method="POST" action="{{url('admin/image_products/'.$imageProduct->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
