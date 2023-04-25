<?php

namespace App\Http\Controllers;//Composer using the namespace to autoload the required files using "psr-4"

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts= [
            ["id"=> 1, "title"=> "Laravel", "posted_by"=> "Amr", "created_at"=> "2023-4-24"],
            ["id"=> 2, "title"=> "JS", "posted_by"=> "Ahmed", "created_at"=> "2023-4-22"],
            ["id"=> 3, "title"=> "Node", "posted_by"=> "Saleh", "created_at"=> "2023-4-20"],
        ];
        return view('posts.index', [
            "posts"=> $posts,
            "pageName"=> "Laravel Test"
        ]);
    }
}
