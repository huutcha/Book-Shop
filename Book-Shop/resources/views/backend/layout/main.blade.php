<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title','Document')</title>
        <link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" />
        @stack('css')
    </head>
    <body>
        <div class="container">
            {{-- header --}}
            @include('frontend.layouts._header')
            {{-- content --}}
            @yield('content')
            {{-- footer --}}
            @include('frontend.layouts._footer')
        </div>

        <script src="{{asset('vendors/jquery/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
     @stack('js')
    </body>
</html>

