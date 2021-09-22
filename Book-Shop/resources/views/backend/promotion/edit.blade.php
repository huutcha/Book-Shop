@extends('backend.layouts.table')
@section('title')
    Admin | Sửa danh mục con
@endsection
@section('page-title')
    Sửa danh mục con
@endsection
@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/promotions/'.$promotion->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="{{$promotion->name}}"/>
            </div>
            <div class="form-group">
                <label>Description:</label>
                <input type="text" name="category_id" class="form-control" value="{{$promotion->description}}"/>
            </div>
            <div class="form-group">
                <label>Sale:</label>
                <input type="text" name="category_id" class="form-control" value="{{$promotion->sale}}"/>
            </div>
            <div class="form-group">
                <label>Date Expired:</label>
                <input type="date" class="form-control date-inputmask" name="date_expired" id="date-mask" value="{{Carbon\Carbon::parse($promotion->date_expired)->format('Y-m-d')}}"/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
