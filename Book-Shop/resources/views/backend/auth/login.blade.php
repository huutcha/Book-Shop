@extends('backend.layouts.main')
@section('title')
    Admin| Đăng nhập
@endsection
@section('content')
    <form action="{{ url('admin/login')}}" method="post">
        @csrf
        <h2>Login</h2>
        <input type="hidden" name="role" value="1">
        @if (Session::has('errors'))
            {{Session::get('errors')}}
        @endif
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
@endsection