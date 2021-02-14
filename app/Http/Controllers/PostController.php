<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => Post::all(),
        ];
        return view('post.index', $data);
    }


    public function create()
    {
        $data = [
            'category' => Category::all(),
        ];
        return view('post.create', $data);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnail');
        } else {
            $path = "https://via.placeholder.com/150x150";
        }
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $user_id = auth()->user()->id;
        $detail = $request->input('detail');
        //   $post->name = "Surachet";
        //$post->postname="admin";
        // $post->email ="61123855@g.cmru.ac.th";
        // $post->password = Hash::make("1234");
        // $post->save();
        $post = new Post();
        $post->title = $title;
        $post->thumbnail = $path;
        $post->category_id = $category_id;
        $post->user_id = $user_id;
        $post->detail = $detail;


        $post->save();

        return redirect('post');
    }
    public function edit($id)
    {
        $post = Post::find($id);

        $data = [
            'post' => $post
        ];


        return view('post.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $post = new Post();
        $name = $request->input('name');
        $postname = $request->input('postname');
        $password = $request->input('password');
        $email = $request->input('email');
        //   $post->name = "Surachet";
        //$post->postname="admin";
        // $post->email ="61123855@g.cmru.ac.th";
        // $post->password = Hash::make("1234");
        // $post->save();
        $post =  Post::find($id);

        $post->name = $name;
        $post->postname = $postname;
        $post->password = $password;
        $post->email = $email;



        $post->save();


        return redirect('post');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete($id);


        return redirect('post');
    }
}
