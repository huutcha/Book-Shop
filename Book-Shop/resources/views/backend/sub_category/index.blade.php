@extends('backend.layouts.main')

@section('title')
    Sub Categories
@endsection

@push('css')
    <link rel="stylesheet" href="#" />
@endpush

@section('page-title')
    Danh sách danh mục nhánh
@endsection
@section('create')
    <a href="{{url('admin/sub_categories/create')}}" class="btn btn-primary" style="margin-bottom: 16px">Thêm mới danh mục nhánh</a>
@endsection

@push('js')

@endpush

@section('table')
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Category ID</th>
            <th>Action</th>
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
    </table>
@endsection
