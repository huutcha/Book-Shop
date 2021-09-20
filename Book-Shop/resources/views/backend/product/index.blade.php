@extends('backend.layouts.main')

@section('title')
    Products
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
    </table>
@endsection
