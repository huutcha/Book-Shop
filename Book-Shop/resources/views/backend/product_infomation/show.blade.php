@extends('backend.layouts.table')

@section('content')
    <h3>Name: {{$product_infomation->name}}</h3>
    <p>Id: {{$product_infomation->id}}</p>
    <p>Author: {{$product_infomation->author}}</p>
    <h3>Published: {{$product_infomation->published}}</h3>
    <p>Language: {{$product_infomation->language}}</p>
    <p>Year: {{$product_infomation->year}}</p>
    <p>Product Id: {{$product_infomation->product_id}}</p>
@endsection
