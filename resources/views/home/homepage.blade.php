<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
       @include('home.header')
      <!-- header section end -->
      <!-- services section start -->
       @include('home.service')
      <!-- services section end -->
      <!-- about section start -->
     @include('home.about')
      <!-- about section end -->
      <!-- blog section start -->
      @include('home.blog')
      <!-- blog section end -->
      <!-- client section start -->
     @include('home.client')
      <!-- client section start -->
      <!-- choose section start -->
      @include('home.section')
      <!-- choose section end -->
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 All Rights Reserved. Design by <a href="https://html.design">NULL</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      @include('home.js')
   </body>
</html>