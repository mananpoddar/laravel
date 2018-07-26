<?php

namespace App\Http\Controllers;
use Auth;
use App\post;
use Illuminate\Http\Request;
class postcontroller extends Controller
{
    public function main_page(){
        $posts = post::all();
        
        return view("welcome",array("posts"=>$posts,));

    }

    public function index(){
        $logged = Auth::id();
        $posts = post::all()->where("user_id" , $logged);
        return view("adminpanel/home",array("posts"=>$posts,));

}
public function create(){
    return view("adminpanel/create");

}
public function store(Request $request){
   $post = new post();

    $posttitle = $request->title;
    $postbody = $request->body;

   $postUserId = Auth::id();
   $post->user_id = $postUserId;
   $post->title = $posttitle;
   $post->content = $postbody;
   $post->save();
   return redirect()-> route("posts.index");

   
  
}

}
