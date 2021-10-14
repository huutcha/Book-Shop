@extends('backend.layouts.table')

@section('title')
Admin | Quản lý danh mục con
@endsection

<<<<<<< HEAD
@push('css')
    <link rel="stylesheet" href="#" />
@endpush

@section('page-title')
    Danh sách danh mục con
@endsection
@section('create')
    <a href="{{url('admin/sub_categories/create')}}" class="btn btn-primary" style="margin-bottom: 16px">Thêm mới danh mục con</a>
@endsection

@push('js')

@endpush

@section('table')
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Category ID</th>
        <th></th>
    </tr>
    @foreach ($sub_categories as $sub_category)
        <tr>
            <td>{{$sub_category->id}}</td>
            <td>{{$sub_category->name}}</td>
            <td>{{$sub_category->category_id}}</td>
            <td>
                <a class="btn btn-primary" href="{{ url('admin/sub_categories/'.$sub_category->id)}}">Show</a>
                <a class="btn btn-primary" href="{{ url('admin/sub_categories/'.$sub_category->id.'/edit')}}">Edit</a>
                <form method="POST" action="{{url('admin/sub_categories/'.$sub_category->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection()
=======
@section('page-title')
Quản lý danh mục con
@endsection
@section('create')
<a href="{{url('admin/sub_categories/create')}}" style="margin-bottom: 16px" class="btn btn-primary">Thêm mới danh mục con</a>
@endsection
@section('table')
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên danh mục</th>
            <th>Danh mục cha</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sub_categories as $sub_category)
            <tr>
                <td>{{$sub_category->id}}</td>
                <td>{{$sub_category->name}}</td>
                <td>{{$sub_category->category->name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('admin/sub_categories/'.$sub_category->id.'/edit')}}">Edit</a>
                    <form method="POST" action="{{url('admin/sub_categories/'.$sub_category->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
>>>>>>> huudinh
