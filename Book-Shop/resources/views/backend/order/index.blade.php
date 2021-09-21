@extends('backend.layouts.main')

@section('title')
    orders
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
            <th>Price</th>
            <th>Date</th>
            <th>State</th>
            <th>User_id</th>
            <th>Action</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->date}}</td>
                <td>{{$order->state}}</td>
                <td>{{$order->user_id}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('admin/orders/'.$order->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{ url('admin/orders/'.$order->id.'/edit')}}">Edit</a>
                    <form method="POST" action="{{url('admin/orders/'.$order->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
