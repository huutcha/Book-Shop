@extends('backend.layouts.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/product_sub_cates')}}">
            @csrf
            <div class="form-group">
                <label>Product_id:</label>
                <input type="text" name="product_id" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Sub_categories_id:</label>
                <input type="text" name="sub_categories_id" class="form-control"/>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
