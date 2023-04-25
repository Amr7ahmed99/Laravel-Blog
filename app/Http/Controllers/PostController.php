<?php

namespace App\Http\Controllers;//Composer using the namespace to autoload the required files using "psr-4"

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts;

    public function index(){
        // $posts= [
        //     ["id"=> 1, "title"=> "Laravel", "posted_by"=> "Amr", "created_at"=> "2023-4-24"],
        //     ["id"=> 2, "title"=> "JS", "posted_by"=> "Ahmed", "created_at"=> "2023-4-22"],
        //     ["id"=> 3, "title"=> "Node", "posted_by"=> "Saleh", "created_at"=> "2023-4-20"],
        // ];
        $this->posts= Post::all();//returns eloquent collection object
        return view('posts.index', [
            "posts"=> $this->posts,
            "pageName"=> "Laravel-Blogs"
        ]);
    }

    public function show($id){
        $post= Post::find($id);
        // $post= Post::where('id', $id)->get();//get all records with this value
        // $post= Post::where('id', $id)->first();//first = limit 1
        return view('posts.show', [
            'post'=> $post,
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
