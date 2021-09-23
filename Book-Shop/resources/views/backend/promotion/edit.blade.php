@extends('backend.layouts.main')
@section('title')
    Admin | Chỉnh sửa chương trình khuyến mãi
@endsection
@section('page-title')
Chỉnh sửa chương trình khuyến mãi
@endsection
@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/promotions/'.$promotion->id)}}" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Tên chương trình:</label>
                <input type="text" name="name" class="form-control" value="{{$promotion->name}}"/>
            </div>
            <div class="form-group">
                <label>Mô tả chương trình:</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$promotion->description}}</textarea>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Mức giảm giá (%):</label>
                    <input type="text" name="sale" class="form-control" value="{{$promotion->sale}}"/>
                </div>
                <div class="form-group col-md-6">
                    <label>Ngày hết hạn:</label>
                    <input type="date" name="date-expired" class="form-control" value="{{$promotion->date_expired}}"/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>
@endsection
