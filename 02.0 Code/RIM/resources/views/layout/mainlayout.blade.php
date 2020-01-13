<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  @include('layout.partials.head')
 </head>
 <body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
   @include('layout.partials.sidebar')
   <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
     <!-- Main Content -->
     <div id="content">
      @include('layout.partials.topbar')
      <!-- Begin Page Content -->
       <div class="container-fluid">
        @yield('content')
       </div>
       <!-- /.container-fluid -->
     </div>
     <!-- End of Main Content -->
     @include('layout.partials.footer')
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
  </a>
  @include('layout.partials.modal')
  @include('layout.partials.footer-scripts')
  @yield('pagejs')
  @yield('template_scripts')
 </body>
</html>
