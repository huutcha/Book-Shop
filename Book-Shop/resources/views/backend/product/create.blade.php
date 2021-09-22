@extends('backend.layouts.table')
@section('title')
    Admin | Thêm mới sản phẩm
@endsection
@section('page-title')
    Thêm mới sản phẩm
@endsection
@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/products')}}">
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
                <div class="form-group row">
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
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
