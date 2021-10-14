@extends('backend.layouts.table')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/imageProducts/'.$imageProduct->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="{{$imageProduct->name}}"/>
            </div>
            <div class="form-group">
                <label>Path:</label>
                <input type="text" name="path" class="form-control" value="{{$imageProduct->path}}"/>
            </div>
            <div class="form-group">
                <label>Product ID:</label>
                <div class="form-group row">
                    <div class="col-md-12">
                      <select
                        class="select2 form-select shadow-none mt-3"
                        {{-- multiple="multiple" --}}
                        style="height: 36px; width: 100%"
                        name="product_id"
                      >
                      
                      @foreach ($products as $product)
                        <option value={{$product->id}}>{{$product->name}}</option>
                      @endforeach                       
                      </select>
                    </div>
                  </div>
            </div>      
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
