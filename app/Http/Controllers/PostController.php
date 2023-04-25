<?php

namespace App\Http\Controllers;//Composer using the namespace to autoload the required files using "psr-4"

use Illuminate\Http\Request;

class PostController extends Controller
{

    

    


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

        return view('posts.show', [
            'post'=> $this->fetchPostByID($id),
            'pageName'=> 'Laravel-Blog'
        ]);
    }

    public function create(Request $request){
        // dd($request->request);
        // return "created";
       
        return redirect('posts');
        //  return $this->index()->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function edit($id){
        
        return view('posts.edit', [
            "post"=> $this->fetchPostByID($id),
            "pageName"=> "Laravel-Edit-Blog"
        ]);
    }
    
    public function destroy($id){
        return "Delete Page";
    }

    private function fetchPostByID($Id){
        $posts= [
            ["id"=> 1, "title"=> "Laravel", "description"=> "this is a post description", "posted_by"=> "Amr", "created_at"=> "2023-4-24"],
            ["id"=> 2, "title"=> "JS", "description"=> "this is a post description", "posted_by"=> "Ahmed", "created_at"=> "2023-4-22"],
            ["id"=> 3, "title"=> "Node", "description"=> "this is a post description", "posted_by"=> "Saleh", "created_at"=> "2023-4-20"],
        ];
        $res= [];
        foreach($posts as $post){
            if($post['id'] == $Id){
                $res= $post;
                break;
            }
        }
        return $res;
    }

}
