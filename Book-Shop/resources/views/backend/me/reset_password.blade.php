@extends('backend.me.main')
@section('title')
Đổi mật khẩu
@endsection

@section('sidebar')
<ul class="list-group">
    <a href="{{ url('admin/profile') }}" class="list-group-item">Thông tin cá nhân</a>
    <a href="{{ url('admin/profile/edit') }}" class="list-group-item">Chỉnh sửa thông tin</a>
    <a href="{{ url('admin/resetpassword') }}" class="list-group-item active">Đổi mật khẩu</a>
    <a href="{{ url('admin/logout') }}" class="list-group-item">Đăng xuất</a>
</ul>
@endsection
@section('main')
<h2>Đổi mật khẩu</h2>

<form action="{{ url('admin/resetpassword')}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Nhập mật khẩu của bạn:</label>
        <input type="password" class="form-control" name="old_pass" id="">
    </div>
    <div class="form-group">
        <label for="">Nhập mật khẩu mới:</label>
        <input type="password" class="form-control" name="new_pass" id="">
    </div>
    <div class="form-group">
        <label for="">Nhập lại mật khẩu mới:</label>
        <input type="password" class="form-control" name="re_new_pass" id="">
    </div>
    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>
@endsection
