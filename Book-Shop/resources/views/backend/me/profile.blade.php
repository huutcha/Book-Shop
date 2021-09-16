@extends('backend.me.main')
@section('title')
Thông tin cá nhân
@endsection

@section('sidebar')
<ul class="list-group">
    <a href="{{ url('admin/profile') }}" class="list-group-item active">Thông tin cá nhân</a>
    <a href="{{ url('admin/profile/edit') }}" class="list-group-item">Chỉnh sửa thông tin</a>
    <a href="{{ url('admin/resetpassword') }}" class="list-group-item">Đổi mật khẩu</a>
    <a href="{{ url('admin/logout') }}" class="list-group-item">Đăng xuất</a>
</ul>
@endsection
@section('main')
<h2>Thông tin cá nhân</h2>
<p>
    Email: <br>
    {{ Auth::user()->email}} <br>
    Họ và tên: <br>
    {{ Auth::user()->information->fullname}} <br>
    Giới tính: <br>
    {{ Auth::user()->information->gender}} <br>
    Ngày sinh: <br>
    {{ Auth::user()->information->dob}} <br>
    Địa chỉ: <br>
    {{ Auth::user()->information->address}} <br>
    Số điện thoại: <br>
    {{ Auth::user()->information->phone}} <br>
</p>
@endsection
