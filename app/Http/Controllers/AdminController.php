<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\post;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->usertype === 'admin') {
            return view('admin.adminhome');
        }

        return redirect()->route('home');
    }

    public function post_page()
    {
        return view ('admin.post_page');
    }


    public function add_post(request $request)
    {

     $user=Auth()->user();

     $user_id = $user->id;
     $name = $user->name;
     $user_type = $user->User_type;


      $post= new post;

     $post->title = $request->title; 

      $post->description = $request->description;

     $post->user_id = $user_id;

     $post->name = $name;
     
     $post->user_type = $user_type;


     
     $post->post_status = 'active';

      
       
      $image = $request->image;
        if($image) 
             {
              $imagename =time().'.'.$image->getClientOriginalExtension();

              $image->move(public_path('postimage'), $imagename); 
             $post->image = $imagename; 
             }
    

    

      $post->save();
      return redirect()->back()->with('message', 'Success,Post Has been Added ');



    }

    public function show_post()
    {
        $post=post::all();
     return view('admin.show_post',compact('post'));
    }

    public function delete_post($id)
    {
        $post=post::find($id);
        $post->delete();
       return redirect()->back()->with('message','Post Has Been Deleted');


    }
    public function edit_post($id)
    {
      $post=post::find($id);
      return view('admin.edit_post',compact('post'));
    }

    public function update_post(request $request, $id)
    {
      $data=post::find($id);
      $data->title=$request->title;
      $data->description=$request->description;
     $image=$request->image;
     if ($image)
     {
         $imagename =time().'.'.$image->getClientOriginalExtension();

              $image->move(public_path('postimage'), $imagename); 
             $data->image = $imagename; 
     }

      $data->save();
      return redirect()->back()->with('message','Post has  edited successfully');

    }
}