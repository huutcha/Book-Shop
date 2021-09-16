@extends('backend.layouts.main')
@push('css')
    <style>
        .avatar-container{
            position: relative;
        }
        .edit-avatar{
            position: absolute;
            color: white;
            bottom: 0;
            right: 0;
        }
        #avatar{
            display: none;
        }
    </style>
@endpush
@section('content')
    <div class="d-flex">
        <div>
            <div class="card" style="width: 18rem;">
                <div class="avatar-container">
                    <img src="{{asset('storage/avatars/'.Auth::user()->information->avatar)}}" class="card-img-top" alt="">
                    <form action="{{ url('admin/avatar')}}" class="edit-avatar btn btn-primary" method="post" enctype="multipart/form-data" id="avatar-form">
                        @csrf
                        <label for="avatar">
                            Sửa
                            <input type="file" name="avatar" id="avatar">
                        </label>
                    </form>
                </div>
                
                <div class="card-body">
                  <h5 class="card-title">{{ Auth::user()->information->fullname }}</h5>
                  <p>Điểm tích lũy: {{ Auth::user()->point }}</p>
                </div>
            </div>
            @yield('sidebar')
        </div>
        <div class="ml-4">
            @yield('main')
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#avatar').change(function(){
            $('#avatar-form').submit();
        })
    </script>
@endpush
