@extends('base')

@section('content')
    <livewire:admin.accommodation.index />

@endsection

@section('scripts')

       <!-- Custom styles for this page -->
       <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
        <!-- Page level plugins -->
        <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
@endsection
