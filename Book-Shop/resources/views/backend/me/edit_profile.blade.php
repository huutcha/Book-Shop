@extends('backend.me.main')
@section('title')
Chỉnh sửa thông tin cá nhân
@endsection

@section('sidebar')
<ul class="list-group">
    <a href="{{ url('admin/profile') }}" class="list-group-item">Thông tin cá nhân</a>
    <a href="{{ url('admin/profile/edit') }}" class="list-group-item active">Chỉnh sửa thông tin</a>
    <a href="{{ url('admin/resetpassword') }}" class="list-group-item">Đổi mật khẩu</a>
    <a href="{{ url('admin/logout') }}" class="list-group-item">Đăng xuất</a>
</ul>
@endsection
@section('main')
<h2>Chỉnh sửa thông tin cá nhân</h2>
<form action="{{url('admin/profile/edit') }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="fullname">Họ và tên:</label>
        <input type="text" name="fullname" id="fullname" class="form-control" value="{{ Auth::user()->information->fullname}}">
    </div>
    <div class="form-group">
        <label for="gender">Giới tính:</label>
        <label for="male">Nam</label>
        @if (Auth::user()->information->gender == "Nam")
            <input type="radio" name="gender"  id="male" value="1" checked>
            <label for="female">Nữ</label>
            <input type="radio" name="gender"  id="female" value="2">
        @else
            <input type="radio" name="gender"  id="male" value="1" >
            <label for="female">Nữ</label>
            <input type="radio" name="gender"  id="female" value="2" checked>
        @endif
        
    </div>
    <div class="form-group">
        <label for="dob">Ngày sinh:</label>
        <input type="date" name="date_of_birth" class="form-control" id="dob" value="{{Auth::user()->information->date_of_birth}}">
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ:</label>
        <input type="text" name="address" class="form-control" id="address" value="{{ Auth::user()->information->address}}">
    </div>
    <div class="form-group">
        <label for="phone">Số điện thoại:</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{ Auth::user()->information->phone}}">
    </div>
    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>

@endsection
