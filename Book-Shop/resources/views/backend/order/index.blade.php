@extends('backend.layouts.table')
@section('title')
Admin | Danh sách đơn hàng
@endsection

@section('page-title')
Danh sách đơn hàng
@endsection

@section('table')
<thead>
    <tr>
        <th>Mã đơn hàng</th>
        <th>Ngày tạo</th>
        <th>Người mua</th>
        <th>Trạng thái</th>
        <th>Tổng giá</th>
        <th></th>
    </tr>
</thead>
<tbody>
    @foreach ($orders as $order)
    <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->create_at}}</td>
        <td>{{$order->user->email}}</td>
        <td>{{$order->state_char}}</td>
        <td>{{$order->price}}</td>
        <td>
            <a class="btn btn-primary" href="{{ url('admin/orders/'.$order->id)}}">Xem chi tiết</a>
            <form method="POST" action="{{url('admin/orders/'.$order->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
@endsection
