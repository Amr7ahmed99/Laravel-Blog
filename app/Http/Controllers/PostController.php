<?php

namespace App\Http\Controllers;//Composer using the namespace to autoload the required files using "psr-4"

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts;

    public function index(){
        $this->posts= Post::all();//returns eloquent collection object
        return view('posts.index', [
            "posts"=> $this->posts,
            "pageName"=> "Laravel-Blogs"
        ]);
    }

    public function show($id){
        $post= Post::find($id);
        // $post= Post::where('id', $id)->get();//get all records with common value
        // $post= Post::where('id', $id)->first();//first = limit 1
        return view('posts.show', [
            'post'=> $post,
            'pageName'=> 'Laravel-Blog'
        ]);
    }

    public function create(){
        return view("posts.create", [
            "pageName"=> "Laravel-Create-Blogs"
        ]);
        //  return $this->index()->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function store(Request $myRequestObj){//Hinting Type
        $data= $myRequestObj->all();//Get Request Data
        // Post::create([
        //     'title'=> $data['title'],
        //     "description"=> $data['description'],
        // ]);
        //Insert New Data Into Posts Table
        Post::create($data);//Takes [title, description] from data object according to $fillable
        return redirect()->route('posts.index');
    }

    public function edit($post){
        
        return view('posts.edit', [
            "post"=> Post::find($post),
            "pageName"=> "Laravel-Edit-Blog"
        ]);
    }

    public function update(Request $myRequestObj, $id){
        $data= $myRequestObj->all();
        $updateFlag= Post::find($id)->update(['title'=> $data['title'], 'description'=> $data['description']]);
        // dd($updateFlag);
        return redirect()->route('posts.index');
    }
    
    public function destroy($id){
        Post::find($id)->delete();
        return redirect()->route('posts.index');

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
