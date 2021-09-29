@extends('backend.layouts.main')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('admin/categories/'.$category->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$category->name}}"/>
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
