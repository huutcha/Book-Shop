@extends('backend.layouts.main')
@section('content')
    <div class="d-flex">
        <div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('test/'.Auth::user()->information->avatar)}}" class="card-img-top" alt="">
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
