<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">
@include('admin.layouts.partials.head')

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
    @include('admin.layouts.partials.navbar')       
        <!-- /.modal -->
        <!-- ========== App Menu ========== -->
        @include('admin.layouts.partials.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    
                    @include('admin.layouts.components.content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

           @include('admin.layouts.partials.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

 


   @include('admin.layouts.partials.script')
</body>

</html>