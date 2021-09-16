@extends('backend.layouts.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/product_infomations/'.$product_infomation->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="{{$product_infomation->name}}"/>
            </div>
            <div class="form-group">
                <label>Author:</label>
                <input type="text" name="author" class="form-control" value="{{$product_infomation->author}}"/>
            </div>
            <div class="form-group">
                <label>Published:</label>
                <input type="text" name="published" class="form-control" value="{{$product_infomation->published}}"/>
            </div>
            <div class="form-group">
                <label>Language:</label>
                <input type="text" name="language" class="form-control" value="{{$product_infomation->language}}"/>
            </div>
            <div class="form-group">
                <label>Year:</label>
                <input type="text" name="year" class="form-control" value="{{$product_infomation->year}}"/>
            </div>
            <div class="form-group">
                <label>Product_Id:</label>
                <input type="text" name="product_id" class="form-control" value="{{$product_infomation->product_id}}"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
