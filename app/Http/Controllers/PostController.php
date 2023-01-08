<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\fileExists;

class PostController extends Controller
{
    public function index(){
        $post=Post::all();
        return view('posts.posts',compact('post'));
    }


    public function show(){
        $post=Post::all();
        return view('posts.show',compact('post'));
    }

    public function add(){
        return view('posts.add');
    }

    public function save(Request $r){
        $title=$r->title;
        $author=$r->author;
        $price=$r->price;
        $descrip=$r->discriptions;
        $image=$title.'.'.$r->file('image')->getClientOriginalExtension();
        $r->file('image')->storeAs('public/images',$image);
        Post::create(['title'=>$title,'author'=>$author,'price'=>$price,'descriptions'=>$descrip,'image'=>$image]);
        return to_route('showposts');
    }

    public function delete($id){
       $post= Post::find($id);
        $image=$post->image;
       
        if(File::exists('storage/images/'.$image)){
            File::delete('storage/images/'.$image);
        }
        $post->delete();
        return to_route('showposts');

    }

    public function buy(){
        return view('posts.payment');
    }
}
