@extends('backend.layouts.main')
@section('title')
Admin | Thêm mới danh mục con
@endsection
@section('page-title')
Thêm mới danh mục con
@endsection
@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/sub_categories')}}">
            @csrf
            <div class="form-group">
                <label>Tên danh mục:</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Danh mục:</label>
                <input type="text" name="category_id" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
@endsection
