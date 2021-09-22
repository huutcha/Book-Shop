@extends('backend.layouts.table')

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
                <label>Product_Id:</label>
                <input type="text" name="product_id" class="form-control"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
