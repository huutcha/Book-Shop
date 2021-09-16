@extends('backend.layouts.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('products')}}">
            @csrf
            <div class="form-group">
                <label>Product Code:</label>
                <input type="text" name="product_code" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Quantity:</label>
                <input type="text" name="quantity" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Rate:</label>
                <input type="text" name="rate" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="text" name="price" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Promotion ID:</label>
                <input type="text" name="promotion_id" class="form-control"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
