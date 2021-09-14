@extends('backend.layouts.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('sub_categories/'.$sub_category->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="{{$sub_category->name}}"/>
            </div>
            <div class="form-group">
                <label>Category ID:</label>
                <input type="text" name="category_id" class="form-control" value="{{$sub_category->name}}"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
