<!DOCTYPE html>
<html>
  <head> 
     <style type="text/css">
        .post_title
        {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            text-align: center; 
        }

        .div_center
        {
            text-align: center;
            padding:30px;
        }

        label
        {
            display:inline-block;
            width:200px;
            
        }

        
  .img_deg
  {
    height:100px;
    width:150px;
    padding:10px;
    margin:auto;
  }

    </style>
    <base href="/public">  
  @include('admin.css')
  </head>
  <body>

   @include('admin.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
       
         @if(session()->has('message'))
      <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      {{session()->get('message')}}
      </div>
      @endif
       <div class="page-content">
          <h1 class="post_title">Edit Post</h1>

       <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="div_center">

                        <label for="">Post title</label>
                        <input type="text" name="title" value="{{$post->title}}">
                      </div>

                        <div  class="div_center">
                        <label for="">Description</label>
                        <textarea name="description" >{{$post->description}}</textarea>
                      </div>
                      <div class="div_center">
                        <label>Old image</label>
                        <img src="{{ asset('postimage/' . $post->image) }}" class="img_deg">
                      </div>

                        <div class="div_center">
                        <label>Update Image</label>
                        <input type="file" name="image">
                      </div>

                        <div class="div_center">
                        
                        <input type="submit" class="btn btn-primary">
                      </div>


       </form>

       </div>
    
     
     @include('admin.footer')
      
  </body>
</html>