@extends('backend.layouts.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/orders')}}">
            @csrf
            <div class="form-group">
                <label>Price:</label>
                <input type="text" name="price" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Date:</label>
                <input type="date" name="date" class="form-control"/>
            </div>
            <div class="form-group">
                <label>State:</label>
                <input type="text" name="state" class="form-control"/>
            </div>
            <div class="form-group">
                <label>User_id:</label>
                <input type="text" name="user_id" class="form-control"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
