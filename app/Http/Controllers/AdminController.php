<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{

    public function index(){
    if(Auth::id()){
    $usertype= Auth()->user()->usertype;
     if($usertype =="user"){
        return view('dashboard');
     }
     else if($usertype =="admin"){
        return view ('admin.index');
     }
     else{
        return redirect()->back();
     }
    }
    }
    public function post_page(){
      return view('admin.post');
    }
    public function add_page(Request $request)
    { 
      $user=Auth()->user();
      $userid=$user->id;
      $name=$user->name;
      $usertype=$user->usertype;

      
        // Validate the form input
        $validatedData = $request->validate([
            'post-title' => 'required|string|max:255',
            'post-description' => 'required|string',
            'post-file' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,avi,mov|max:2048', // Make file upload optional
        ]);
      
        // Create a new Post instance
        $post = new Post;
        $post->user_id=$userid;
        $post->title = $validatedData['post-title'];
        $post->description = $validatedData['post-description'];
        $post->post_status = "active";
        $post->name=$name;
        $post->usertype=$usertype;
        // Check if a file is uploaded and handle it
        if ($request->hasFile('post-file')) {
            $file = $request->file('post-file');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('postimage'), $imageName);
            $post->image = $imageName;
        } else {
            $post->image = null; 
        }
    
        
        $post->save();
        // return $post;
        
       return redirect()->back()->with('message','Data Saved Successfully');
    }
    public function show_page()

    {
      $post=Post::all();
      return view('admin.show',compact('post'));
    }
}
