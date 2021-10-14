<<<<<<< HEAD
@extends('backend.layouts.table')

=======
@extends('backend.layouts.main')
@section('title')
Admin | Chỉnh sửa sản phẩm
@endsection
@section('page-title')
Chỉnh sửa sản phẩm  
@endsection
@push('link-css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/quill/dist/quill.snow.css')}}" />
@endpush
>>>>>>> huudinh
@section('content')
<form action="{{url('admin/products/'.$product->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Thông tin sản phẩm</h5>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" id="" value="{{ old('name') ? old('name') : $product->information->name}}" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="" class="">Mã sản phẩm</label>
                        <input type="text" class="form-control @error('product_code') is-invalid @enderror" id="" value="{{old('product_code') ? old('product_code') : $product->product_code}}" name="product_code" />
                        @error('product_code')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="">Giá (VNĐ)</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="" value="{{old('price') ? old('price') : $product->price}}" name="price" />
                        @error('price')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="">Giá khuyến mãi(VNĐ)</label>
                        <input type="text" class="form-control @error('price_sale') is-invalid @enderror" id="" value="{{old('price_sale') ? old('price_sale') : $product->price_sale}}" name="price_sale" />
                        @error('price_sale')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="">Số lượng</label>
                        <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="" value="{{old('quantity') ? old('quantity') : $product->quantity}}" name="quantity" />
                        @error('quantity')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    {{-- <div class="form-group col-md-3">
                        <label for="" class="">Khuyến mãi</label>
                        <select class="select2 form-select shadow-none" name="promotion_id" style="width: 100%; height: 36px;">
                            <option value="0">--Chọn chương trình--</option>
                            @foreach ($promotions as $promotion)
                                <option value="{{$promotion->id}}" {{$product->promotion_id == $promotion->id ? 'selected' : ''}}>{{$promotion->name}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <h5 class="card-title mt-4">Mô tả sản phẩm</h5>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="" class="">Tác giả</label>
                            <input type="text" class="form-control" value="{{old('authhor') ? old('authhor') : $product->information->author}}"  id="" name="author" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="">Nhà xuất bản</label>
                            <input type="text" class="form-control" id="" value="{{old('published') ? old('published') : $product->information->published}}" name="published" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="" class="">Ngôn ngữ</label>
                            <input type="text" class="form-control" id="" value="{{old('language') ? old('language') : $product->information->language}}" name="language" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="">Năm xuất bản</label>
                            <input type="text" class="form-control" id="" value="{{old('year') ? old('year') : $product->information->year}}" name="year" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả sản phẩm</label>
                        <textarea name="decs" id="decs" cols="30" style="display:none" rows="10">{{$product->information->decs}}</textarea>
                        <div id="quillEditor" style="height: 300px"></div>
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
                                    <option value="{{$sub_cate->id}}" {{ in_array($sub_cate->id, $subCateIds) ? 'selected' : ''  }}>
                                        {{$sub_cate->name}}
                                    </option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                    @error('sub_category_id')
                        <div class="text-danger mt-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
<<<<<<< HEAD
            <div class="form-group row">
                    <label>Promotion ID:</label>
                    <div class="col-md-12">
                      <select
                        class="select2 form-select shadow-none mt-3"
                        {{-- multiple="multiple" --}}
                        style="height: 36px; width: 100%"
                        name="promotion_id"
                      >
                      
                      @foreach ($promotions as $promotion)
                        <option value={{$promotion->id}}>{{$promotion->name}} - {{$promotion->description}}</option>
                      @endforeach                       
                      </select>
                    </div>
                  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
=======
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ảnh sản phẩm</h5>
                    <div class="form-group">
                        <input type="file" name="path[]" onchange="load(this)" id="upload" multiple class="form-control">
                        @error('path')
                            <div class="text-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                <div class="file-upload-content">
                    @foreach ($product->image as $img )
                        <img src="{{asset('storage/products/'.$img->path)}}" alt="" width="60" style="margin-right: 8px">
                    @endforeach
                </div>
            </div>
        </div>
>>>>>>> huudinh
    </div>
</div>
<button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>
@endsection
@push('link-js')
<script src="{{asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('assets/libs/quill/dist/quill.min.js')}}"></script>
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
    if ($("#quillEditor").length) {
        var quill = new Quill('#quillEditor', {
        modules: {
            toolbar: [
            [{
                header: [1, 2, false]
            }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
            ]
        },
        placeholder: 'Mô tả sản phẩm...',
        theme: 'snow' // or 'bubble'
        });
    }
    // $('.ql-editor').removeClass('ql-blank')
    // console.log($("#decs").text());
    $('.ql-editor').html($("#decs").text())
    $('form').on('submit', function(){
        $("#decs").val($("#quillEditor .ql-editor").html())
    })
</script>
@endpush
