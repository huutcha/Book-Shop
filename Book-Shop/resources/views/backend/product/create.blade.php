@extends('backend.layouts.main')
@section('title')
Admin | Thêm mới sản phẩm
@endsection
@section('page-title')
Thêm mới sản phẩm  
@endsection
@push('link-css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}" />
@endpush
@section('content')
<form action="{{url('admin/products')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Thông tin sản phẩm</h5>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="" class="">Mã sản phẩm</label>
                        <input type="text" class="form-control" id="" name="product_code" />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="">Giá (VNĐ)</label>
                        <input type="text" class="form-control" id="" name="price" />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="">Số lượng</label>
                        <input type="text" class="form-control" id="" name="quantity" />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="">Khuyến mãi</label>
                        <select class="select2 form-select shadow-none" style="width: 100%; height: 36px;">
                            <option>--Chọn chương trình--</option>
                            @foreach ($promotions as $promotion)
                                <option value="{{$promotion->id}}">{{$promotion->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <h5 class="card-title mt-4">Mô tả sản phẩm</h5>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="" class="">Tác giả</label>
                            <input type="text" class="form-control" id="" name="author" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="">Nhà xuất bản</label>
                            <input type="text" class="form-control" id="" name="published" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="" class="">Ngôn ngữ</label>
                            <input type="text" class="form-control" id="" name="language" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="">Năm xuất bản</label>
                            <input type="text" class="form-control" id="" name="year" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Danh mục sản phẩm</h5>
                <div class="form-group">
                    <select class="select2 form-select shadow-none" name="sub_category_id[]" multiple="multiple" style="width: 100%; height: 36px;">
                        
                        @foreach ($categories as $category)
                            <optgroup label="{{$category->name}}">
                                @foreach ($category->subCategory as $sub_cate)
                                    <option value="{{$sub_cate->id}}">{{$sub_cate->name}}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ảnh sản phẩm</h5>
                    <div class="form-group">
                        <input type="file" name="path[]" onchange="load(this)" id="upload" multiple class="form-control">
                    </div>
                <div class="file-upload-content">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
</form>
@endsection
@push('link-js')
<script src="{{asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
@endpush
@push('js')

<script>
    $(".select2").select2();

    function load(input){
        $('.file-upload-content').html('');
        
        var reader = []
        var html = ""
        for (i = 0; i < input.files.length; i++){

            reader[i] = new FileReader()
            reader[i].onload = function(e){
            html = `<img src="${e.target.result}" alt="" class="file-upload-image" style="margin-right: 8px" width="60px">`
            $('.file-upload-content').append(html);
            }
            reader[i].readAsDataURL(input.files[i]);
        }
        
    }
    
</script>
@endpush
