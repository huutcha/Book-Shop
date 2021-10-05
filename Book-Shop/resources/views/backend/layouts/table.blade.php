@extends('backend.layouts.main')


@push('link-css')
        <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}" />
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" />

@endpush
@push('css')
    <style>
        table tbody td.nowrap{
            overflow:hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 320px;
        }
    </style>
@endpush

@section('content')
@yield('create')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                @yield('table')
            </table>
        </div>   
    </div>
</div>
@endsection()
@push('js')
    <!-- this page js -->
    <script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
@endpush

