<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
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

    </style>

</head>
<body>
    @include('admin.header')
     <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      @if(session()->has('message'))
      <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      {{session()->get('message')}}
      </div>
      @endif

     <div class="page-content">
        <h1 class="post_title">Add Post</h1>
             <div>

                 <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="div_center">
                        <label for="">Post title</label>
                        <input type="text" name="title">
                      </div>

                        <div  class="div_center">
                        <label for="">Description</label>
                        <textarea name="description"></textarea>
                      </div>

                        <div class="div_center">
                        <label for="">Add Image</label>
                        <input type="file" name="image">
                      </div>

                        <div class="div_center">
                        
                        <input type="submit" class="btn btn-primary">
                      </div>

                  </form>

             </div>
 </div>

 @include('admin.footer')
</body>
</html>