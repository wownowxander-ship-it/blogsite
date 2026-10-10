<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
       @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      @include('home.homeheader')
         <!-- banner section start -->
      @include('home.homebanner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->

      <!-- services section start -->
     @include('home.homeservices')
      <!-- services section end -->

      <!-- about section start -->
     @include('home.homeabout')
      <!-- about section end -->

      <!-- blog section start -->
    @include('home.homeblog')
      <!-- blog section end -->

      <!-- client section start -->
      @include('home.homeclient')
      <!-- client section end -->

      <!-- footer section start -->
      @include('home.homefooter')
      <!-- footer section end -->

   </body>
</html>