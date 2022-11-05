@extends('Layout.Master')
@section('title', 'Home')
@section('content')



    <div class="container">

        <table class="table table-striped table-hover mt-5 text-center ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted by</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    {{ $post['title'] }}

                    <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['Posted_by'] }}</td>
                        <td>{{ $post['creation_Data'] }}</td>
                        <td>
                            <x-button color="info">view</x-button>
                            <x-button color="primary">Edit</x-button>
                            <x-button color="danger">Delete</x-button>


                            <a href="Posts/{{ $post['id'] }}" class="btn btn-info">view</a>
                            <a href="Posts/{{ $post['id'] }}/edit" class="btn btn-primary">Edit</a>
                            <a class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <a href="Posts/Create" class="btn btn-success text-center">Create Post</a>
    </div>
@endsection
