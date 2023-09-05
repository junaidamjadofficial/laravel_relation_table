<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=post::with('comment')->get();
       // dd($posts);
        return view('Post.index',compact('posts'));
    }
}
