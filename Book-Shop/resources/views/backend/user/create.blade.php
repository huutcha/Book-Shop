@extends('backend.layouts.main')
@section('title')
    Admin | Thêm mới người dùng
@endsection
@section('page-title')
    Thêm mới người dùng
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{url('admin/users')}}" class="">
                @csrf
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Mật khẩu:</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Vai trò:</label>
                    <select name="role" id="" class="form-select">
                        <option value="2" {{Auth::user()->role == 'Admin' ? 'disabled' : ''}}>Admin</option>
                        <option value="3" >User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Point:</label>
                    <input type="text" name="point" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
