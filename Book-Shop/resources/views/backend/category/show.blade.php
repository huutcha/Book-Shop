@extends('backend.layouts.table')

@section('content')
    <h3>Category: {{$category->name}}</h3>
    <p>Id: {{$category->id}}</p>
@endsection
