<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">@yield('header')</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    {{-- main content --}}
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            @yield('content')
    </div>
    <!--/.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>