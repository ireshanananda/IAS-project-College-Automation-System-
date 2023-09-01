<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Controls</title>
    @include('layouts.components.header')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.components.navbar')

        @include('layouts.components.sidebar')


        <div class="content">


  <div class="content-wrapper">

    <div class="content">
        @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ $error }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        @endforeach
        @if(session()->has('alert'))


        @if(session()->get('alert')==="exist")
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          This subject exist!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        @else
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          successfully added..!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @endif
          @endif



    <div class="content">
        @yield('content')

    </div>

  </div>
  @include('layouts.components.controllsidebar')
  <!-- /.control-sidebar -->


    </div>
    @include('layouts.components.footer')

    {{-- scripts section --}}
<script src="{{asset('vendors/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('vendors/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
