<!DOCTYPE html>
<html>
  <head> 
 @include('admin.css')
   
  </head>
  <body >
   @include('admin.adminheader')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
  @include('admin.content')
    </div>
    <!-- JavaScript files-->
   @include('admin.jslink')
  </body>
</html>