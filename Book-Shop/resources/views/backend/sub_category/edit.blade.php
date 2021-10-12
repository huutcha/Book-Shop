<<<<<<< HEAD
@extends('backend.layouts.table')
@section('title')
    Admin | Sửa danh mục con
@endsection
@section('page-title')
    Sửa danh mục con
@endsection
=======
@extends('backend.layouts.main')
@section('title')
Admin | Chỉnh sửa danh mục con
@endsection
@section('page-title')
Chỉnh sửa danh mục con   
@endsection
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}" />
@endpush
>>>>>>> huudinh
@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/sub_categories/'.$sub_category->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$sub_category->name}}"/>
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
<<<<<<< HEAD
                <label>Category ID:</label>
                <div class="form-group row">
                    <div class="col-md-12">
                      <select
                        class="select2 form-select shadow-none mt-3"

                        style="height: 36px; width: 100%"
                        name="category_id"
                      >
                      
                      @foreach ($categories as $category)
                        <option value={{$category->id}}>{{$category->name}}</option>
                      @endforeach                       
                      </select>
                    </div>
                  </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
=======
                <label class="">Danh mục cha</label>
                <select class="select2 form-select shadow-none" name="category_id" style="width: 100%; height: 36px;">
                    <option>--Chọn danh mục--</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $sub_category->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
>>>>>>> huudinh
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
