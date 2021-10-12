@extends('backend.layouts.table')

@section('title')
Admin | Quản lý sản phẩm
@endsection
<<<<<<< HEAD

@push('css')
    <link rel="stylesheet" href="#" />
@endpush

@push('js')

@endpush
@section('create')
    <a href="{{url('admin/products/create')}}" class="btn btn-primary" style="margin-bottom: 16px">Thêm mới sản phẩm</a>
@endsection
@section('table')
    <tr>
        <th>Id</th>
        <th>Product Code</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Price</th>
        <th>Promotion_id</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_code}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->rate}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->promotion_id}}</td>
            <td>
                <a class="btn btn-primary" href="{{ url('admin/products/'.$product->id)}}">Show</a>
                <a class="btn btn-primary" href="{{ url('admin/products/'.$product->id.'/edit')}}">Edit</a>
                <form method="POST" action="{{url('admin/products/'.$product->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
=======
@section('page-title')
Danh sách sản phẩm
@endsection
@section('create')
<a href="{{url('admin/products/create')}}" class="btn btn-primary" style="margin-bottom: 16px">Thêm mới sản phẩm</a>
@endsection
@section('table')
    <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng hàng</th>
            <th>Giá</th>
            <th>Chương trình khuyến mãi</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->product_code}}</td>
                <td class="nowrap">{{$product->information->name}}</td>
                <td>{{$product->quantity}}</td>
                @if ($product->promotion)
                    <td>
                        <span class="text-success">{{($product->price) / 100 * (100 - $product->promotion->sale)}}</span>
                        <span style="text-decoration-line: line-through">{{$product->price}}</span>
                    </td>
                @else
                    <td>{{$product->price}}</td>
                @endif
                <td>{{$product->promotion ? $product->promotion->name : ''}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('admin/products/'.$product->id.'/edit')}}">Edit</a>
                    <form method="POST" action="{{url('admin/products/'.$product->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
>>>>>>> huudinh
@endsection
