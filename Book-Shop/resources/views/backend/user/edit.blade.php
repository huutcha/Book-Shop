@extends('backend.layouts.main')
@section('title')
Admin | Chỉnh sửa thông tin người dùng
@endsection
@section('page-title')
Chỉnh sửa thông tin người dùng
@endsection

@section('content')
<form action="{{url('admin/users/'.$user->id)}}" method="post" id="user-form">
    @csrf
    @method('PUT')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Thông tin tài khoản
                </div>
                
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="{{$user->email}}"/>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu mới:</label>
                        <input type="password" name="password" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label>Vai trò:</label>
                        <select name="role" id="" class="form-select">
                            <option value="2" {{Auth::user()->role == 'Admin' ? 'disabled' : ''}} {{$user->role == 'Admin' ? 'checked' : ''}}>Admin</option>
                            <option value="3" {{$user->role == 'User' ? 'checked' : ''}} >User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Point:</label>
                        <input type="text" name="point" class="form-control" value="{{$user->point}}"/>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Thông tin hồ sơ người dùng
                </div>
                <div class="form-group">
                    <label for="">Họ và tên</label>
                    <input type="text" name="fullname" id="" value="{{$user->information->fullname}}" class="form-control">
                </div>
                <div class="form-group d-flex">
                    <div class="col-md-4" style="margin-right: 50px">
                        <label>Ngày sinh </label> 
                        <input type="date" class="form-control date-inputmask" value="{{$user->information->date_of_birth}}" name="date_of_birth" id="date-mask"  />
                    </div>
                    <div class="col-md-4">
                        <label for="example-email" class="col-md-12">Giới tính</label>
                        <div class="d-flex">
                            <div class="form-check" style="margin-right: 30px">
                                <input type="radio" class="form-check-input" id="male" name="gender" value="1" {{$user->information->gender == 1 ? 'checked' : ''}}  />
                                <label class="form-check-label mb-0" for="male">Nam</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="female" name="gender" value="2" {{$user->information->gender == 2 ? 'checked' : ''}} />
                                <label class="form-check-label mb-0" for="female">Nữ</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 mb-0">Phone No</label>
                    <div class="col-md-12">
                        <input type="text"  name="phone" id="phone-mask" value="{{$user->information->phone}}" class="form-control phone-inputmask form-control-line" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 mb-0">Địa chỉ</label>
                    <div class="col-md-12">
                        <input type="text"  name="address" value="{{$user->information->address}}" class="form-control" />
                    </div>
                </div>
            </form>
                <form action="{{url('admin/avatar/'.$user->id)}}" method="POST" id="form-upload" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="upload" id="upload-label">
                            Avatar
                        </label>
                        <input type="file" name="avatar"  id="upload" class="form-control">
                    </div>
                </form>
                <img src="{{asset('storage/avatars/'.$user->information->avatar)}}" class="" width="150" />
            </div>
        </div>
    </div>
    
</div>
<button class="btn btn-primary" type="submit" id="submit">Lưu thay đổi</button>
@endsection
@push('js')
    <script>
        $('#upload').change(function(){
            $('#form-upload').submit()
        })
        $('#submit').click(function(){
            $('#user-form').submit()
        })
    </script>
@endpush
