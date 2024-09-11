<!DOCTYPE html>
<html>
  <head> 
 @include('admin.css')
   <style>
     label {
            display: block; /* Block display for the label */
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%; /* Full width for inputs */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            resize: vertical; /* Allow vertical resizing */
        }

        /* Styling for the submit button */
        .submit-button {
            width: 100%; /* Full width for button */
            padding: 10px;
            background-color: #007bff; /* Blue background */
            color: #fff; /* White text */
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
   </style>
  </head>
  <body >
   @include('admin.adminheader')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
  {{-- @include('admin.content') --}}
  <div class="page-content">
   @if(session()->has('message'))
   <div class="alert alert-success">
      <button type="button" class="close" aria-hidden="true" data-dismiss="alert">X</button>
      {{session()->get('message')}}
   </div>
   @endif
    <div class="addpost d-flex justify-content-center aligh-items-center text-center ms-auto p-5">
      <form action="{{ route('add_page') }}" method="POST" enctype="multipart/form-data">
        @csrf 
        
      
        <label for="post-title">Post Title:</label>
        <input type="text" id="post-title" name="post-title" placeholder="Enter post title" required><br><br>
   
        <label for="post-description">Post Description:</label>
        <textarea id="post-description" name="post-description" rows="4" placeholder="Enter post description" required></textarea><br><br>
    
      
        <label for="post-file">Post Image/Video:</label>
        <input type="file" id="post-file" name="post-file" accept="image/*,video/*"><br><br>
    

        <button type="submit" class="submit-button">Submit</button>
    </form>
    
    </div>
  </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.jslink')
  </body>
</html>