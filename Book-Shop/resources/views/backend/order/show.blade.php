@extends('backend.layouts.main')

@section('content')
    <h3>Price: {{$order->price}}</h3>
    <p>Id: {{$order->id}}</p>
    <p>Date: {{$order->date}}</p>
    <h3>State: {{$order->state}}</h3>
    <p>User_id: {{$order->user_id}}</p>
@endsection
