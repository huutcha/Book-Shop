@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('categories/'.$category->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="{{$category->name}}"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
