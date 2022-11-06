<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /*  public $arr = [
          ['id' => 1, 'title' => 'PHP', 'Desc' => ' PHP is very easy to use', 'Posted_by' => "Omar", 'creation_Data' => "13/2022", 'email' => "Omar@gmail.com"],
          ['id' => 2, 'title' => 'css', 'Desc' => ' css is case Cading style sheet', 'Posted_by' => "ahmed", 'creation_Data' => "114/2022", 'email' => "ahmed@gmail.com"]
      ];
      */

    public function Create()
    {
        return view("Posts.Create");
    }

    public function index()
    {
        $posts=Post::all();
        //dd($posts);
        return view('Posts.index', [
            'posts' => $posts
        ]);
    }

    public function show( Post $post)
    {
       // dd($post);
        //$posts=Post::findorfail($id);
        // dd($posts);

        return view('Posts.show', [
            'array' => $post
        ]);
    }
    public function store()
    {
        // return "storage";
        $title=request()->title;
        $Desc=request()->Desc;
        $created_by=request()->sel ;
        $Email=request()->Emaill ;
        
        $post=Post::create(['title'=>$title,
                            'Desc'=>$Desc,
                            'Name'=>$created_by,
                            'Email'=>$Email]);
        return redirect(route('posts.index'));
    }

    public function Edit($id)
    {
        $Editt=Post::findorfail($id);
        return view("Posts.Edit", [
            'array' => $Editt
        ]);
    }

    public function destroy($id)
    {
      //Post::findorfail($id)->delete();
      return redirect(route('posts.index'));
    }

    public function update($id,Request $request)
    {
        $title=$request->title;
        $Desc=$request->Desc;
        $Name=$request->sel;
      
  Post::where('id',$id)->update(['title'=>$title,
                                'Desc'=>$Desc,
                                'Name'=>$Name]);
    return redirect(route('posts.index'));

    }
}
