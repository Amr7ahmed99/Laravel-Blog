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
            "pageName"=> "Laravel-Blogs"
        ]);
    }

    public function show($id){
        //Dummy Data
        $posts= [
            ["id"=> 1, "title"=> "Laravel", "description"=> "this is a post description","posted_by"=> "Amr", "created_at"=> "2023-4-24"],
            ["id"=> 2, "title"=> "JS", "description"=> "this is a post description", "posted_by"=> "Ahmed", "created_at"=> "2023-4-22"],
            ["id"=> 3, "title"=> "Node", "description"=> "this is a post description", "posted_by"=> "Saleh", "created_at"=> "2023-4-20"],
        ];

        $res= [];
        foreach($posts as $post){
            if($post['id'] == $id){
                $res= $post;
                break;
            }
        }
        return view('posts.show', [
            'post'=> $res,
            'pageName'=> 'Laravel-Blog'
        ]);
    }
}
