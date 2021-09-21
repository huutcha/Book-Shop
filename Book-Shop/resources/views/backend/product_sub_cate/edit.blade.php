@extends('backend.layouts.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/product_sub_cates/'.$product_sub_cate->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Product_id:</label>
                <input type="text" name="product_id" class="form-control" value="{{$product_sub_cate->product_id}}"/>
            </div>
            <div class="form-group">
                <label>Sub_categories_id:</label>
                <input type="text" name="sub_categories_id" class="form-control" value="{{$product_sub_cate->sub_categories_id}}"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
