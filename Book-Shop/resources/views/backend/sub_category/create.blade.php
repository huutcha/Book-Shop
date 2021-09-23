@extends('backend.layouts.main')
@section('title')
Admin | Thêm mới danh mục con
@endsection
@section('page-title')
Thêm mới danh mục con
@endsection
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}" />
@endpush
@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/sub_categories')}}">
            @csrf
            <div class="form-group">
                <label>Tên danh mục con</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="">Danh mục cha</label>
                <select class="select2 form-select shadow-none" name="category_id" style="width: 100%; height: 36px;">
                    <option>--Chọn danh mục--</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
@endsection
@push('js')
<script src="{{asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
<script>
    $(".select2").select2();
</script>
@endpush