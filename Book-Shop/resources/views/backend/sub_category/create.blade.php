@extends('backend.layouts.main')

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
                <input type="text" name="category_id" class="form-control"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
