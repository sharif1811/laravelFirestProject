<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    @include('backend.admin.includes.style')
    <!-- Custom fonts for this template-->

</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.admin.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- start of Topbar -->
                @include('backend.admin.includes.header')
                <!-- End of Topbar -->

                <!-- start content -->
                @yield('content')
                <!-- end content -->
            </div>

                <!--start of Footer -->
                @include('backend.admin.includes.footer')
                <!-- End of Footer -->

        </div>

    </div>

                <!-- Logout Modal start-->
                @include('backend.admin.includes.modal')
                <!-- Logout Modal end-->

                <!-- Bootstrap core JavaScript-->
                @include('backend.admin.includes.script')
                <!-- Bootstrap core JavaScript-->

</body>

</html>