@extends('backend.layouts.table')
@section('title')
    Admin | Thêm mới danh mục con
@endsection
@section('page-title')
    Thêm mới danh mục con
@endsection
@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/sub_categories')}}">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Category ID:</label>
                <div class="form-group row">
                    <div class="col-md-12">
                      <select
                        class="select2 form-select shadow-none mt-3"
                        style="height: 36px; width: 100%"
                        name="category_id"
                      >
                      
                      @foreach ($categories as $category)
                        <option value={{$category->id}}>{{$category->name}}</option>
                      @endforeach                       
                      </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
