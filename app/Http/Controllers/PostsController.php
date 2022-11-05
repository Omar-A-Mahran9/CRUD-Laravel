<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public $arr = [
        ['id' => 1, 'title' => 'PHP', 'Desc' => ' PHP is very easy to use', 'Posted_by' => "Omar", 'creation_Data' => "13/2022", 'email' => "Omar@gmail.com"],
        ['id' => 2, 'title' => 'css', 'Desc' => ' css is case Cading style sheet', 'Posted_by' => "ahmed", 'creation_Data' => "114/2022", 'email' => "ahmed@gmail.com"]
    ];

    public function Create()
    {
        return view("Posts.Create");
    }

    public function index()
    {
        return view('Posts.index', [
            'posts' => $this->arr
        ]);
    }

    public function show($id)
    {
        return view('Posts.show', [
            'array' => $this->arr,
            'iid' => $id
        ]);
    }
    public function store()
    {
        // return "storage";
        return view("/Posts.index");
    }

    public function Edit($id)
    {
        return view("Posts.Edit", [
            'idd' => $id,
            'array' => $this->arr
        ]);
    }

    public function destroy($id)
    {
        return $id;
    }

    public function update(Request $request, $id)
    {
    }
}
