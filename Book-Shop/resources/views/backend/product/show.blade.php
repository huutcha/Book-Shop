@extends('backend.layouts.table')

@section('content')
    <h3>Product Code: {{$product->product_code}}</h3>
    <p>Id: {{$product->id}}</p>
    <p>Quantity: {{$product->quantity}}</p>
    <h3>Rate: {{$product->rate}}</h3>
    <p>Price: {{$product->price}}</p>
    <p>Promotion Id: {{$product->promotion_id}}</p>
    <a class="btn btn-primary" href="{{ url('admin/products/'.$product->id.'/edit')}}">Edit-Product</a>

    <h3>Name: {{$product_infomation->name}}</h3>
    <p>Id: {{$product_infomation->id}}</p>
    <p>Author: {{$product_infomation->author}}</p>
    <h3>Published: {{$product_infomation->published}}</h3>
    <p>Language: {{$product_infomation->language}}</p>
    <p>Year: {{$product_infomation->year}}</p>
    <p>Product Id: {{$product_infomation->product_id}}</p>
    <a class="btn btn-primary" href="{{ url('admin/product_infomations/'.$product->id.'/edit')}}">Edit-ProductInfomation</a>
@endsection
