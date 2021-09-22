@extends('backend.layouts.table')
@section('title')
    Admin | Thêm mới khuyến mãi
@endsection
@section('page-title')
    Thêm mới khuyến mãi
@endsection
@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/promotions')}}">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Description:</label>
                <input type="text" name="description" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Sale:</label>
                <input type="text" name="sale" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Date Expired:</label>
                <input type="date" class="form-control date-inputmask" name="date_expired" id="date-mask" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
