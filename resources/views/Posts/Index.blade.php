@extends('Layout.Master')
@section('title', 'Home')
@section('content')



    <div class="container">

        <table class="table table-striped table-hover mt-5 text-center ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Posted_by</th>
                    <th scope="col">Action</th>
                </tr>
                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td>{{ $post->title }}</td>
                        
                        <td>{{ $post['Desc'] }}</td>
                        
                        <td>{{ $post['created_at'] }}</td>
                        
                        <td></td>
                        <td>
                            <!-- <x-button color="info">view</x-button>
                                <x-button color="primary">Edit</x-button>
                                <x-button color="danger">Delete</x-button>
                               -->

                            <a href="Posts/{{ $post->id }}" class="btn btn-info">view</a>
                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a>
                            <form style='display:inline' action='{{route('posts.destroy',['post'=>$post->id])}}' method='POST'>
                                @method('DELETE')
                                @csrf
                                <button  class="btn btn-danger" onclick="delet()">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <a href="Posts/Create" class="btn btn-success text-center">Create Post</a>
    </div>
    
@endsection
