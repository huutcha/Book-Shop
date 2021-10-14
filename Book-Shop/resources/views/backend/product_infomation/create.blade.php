@extends('backend.layouts.table')
@section('title')
    Admin | Thêm mới chi tiết sản phẩm
@endsection
@section('page-title')
    Thêm mới chi tiết sản phẩm
@endsection
@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/product_infomations')}}">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Author:</label>
                <input type="text" name="author" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Published:</label>
                <input type="text" name="published" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Language:</label>
                <input type="text" name="language" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Year:</label>
                <input type="text" name="year" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Product ID:</label>
                <div class="form-group row">
                    <div class="col-md-12">
                    <select
                        class="select2 form-select shadow-none mt-3"
                        style="height: 36px; width: 100%"
                        name="product_id"
                    >
                    
                    @foreach ($products as $product)
                        <option value={{$product->id}}>{{$product->product_code}}</option>
                    @endforeach                       
                    </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
