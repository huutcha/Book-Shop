@extends('backend.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{asset('dist/css/style_profile.min.css')}}">
    <style>
        .scroll-sidebar{
            padding-top: 0;
        }
        .avatar-container{
            position: relative;
            width: 150px;
            margin: auto;
            overflow: hidden;
        }
        
        #upload-form{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;
            background-color: white;
            
        }
        .avatar-container:hover #upload-form{
            display: flex;
            background-color: rgba(129, 236, 236, .4);
        }
        .upload-icon{
            font-size: 36px;
            color: rgb(9, 132, 227);
        }
        #upload{
            display: none;
        }

    </style>
@endpush
@section('content')
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body profile-card">
                <center class="mt-4">
                    <div class="avatar-container rounded-circle">
                        <img src="{{asset('storage/avatars/'.Auth::user()->information->avatar)}}" class="rounded-circle" width="150" />
                        <form action="{{url('admin/avatar')}}" id="upload-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="upload" id="upload-label">
                                <i class="mdi mdi-account-edit upload-icon"></i>
                            </label>
                            <input type="file" name="avatar" id="upload">
                        </form> 
                    </div>
                    <h4 class="card-title mt-2">{{Auth::user()->information->fullname}}</h4>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link">
                                <i class="mdi mdi-account-network" aria-hidden="true"></i>
                                <span class="font-normal">{{Auth::user()->point}} Point</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link">
                                <i class="mdi mdi-camera" aria-hidden="true"></i>
                                <span class="font-normal">Admin</span>
                            </a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->
    @yield('me-content')
</div>
@endsection
@push('js')
<script src="{{asset('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/mask/mask.init.js')}}"></script>
    <script>
        $('#upload').change(function(){
            $('#upload-form').submit();
        })
    </script>
@endpush
