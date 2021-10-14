@extends('frontend.layouts.main')
@section('title')
Thông tin tài khoản
@endsection

@section('page-title')
Thông tin tài khoản
@endsection
@section('create')
<a href="{{url('users/create')}}" style="margin-bottom: 16px" class="btn btn-primary">Thêm mới người dùng</a>
@endsection
@section('table')
<thead>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Vai trò</th>
        <th>Điểm tích lũy</th>
        <th></th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>{{$user->point}} Point</td>
        <td>
            <a class="btn btn-primary" href="{{ url('admin/users/'.$user->id.'/edit')}}">Edit</a>
            <form method="POST" action="{{url('admin/users/'.$user->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
@endsection
