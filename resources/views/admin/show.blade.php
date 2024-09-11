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
      <div class="page-content">
        <table class="table table-striped table-bordered  p-5">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Post Title</th>
                <th scope="col">Post Description</th>
                <th scope="col">Post By</th>
                <th scope="col">Post Status</th>
                <th scope="col">User Type</th>
                <th scope="col">Images</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($post as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->post_status}}</td>
                    <td>{{$post->usertype}}</td>
                    <td style="height:100px;width:100px">
                        <img src="postimage/{{ $post->image}}">
                    </td>
                   
                @endforeach
             
             
            
            </tbody>
          </table>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.jslink')
  </body>
</html>