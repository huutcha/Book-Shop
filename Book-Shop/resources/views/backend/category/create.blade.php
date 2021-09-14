@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('categories')}}">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
