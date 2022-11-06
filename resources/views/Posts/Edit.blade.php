@extends('Layout.Master')
@section('title', 'UpdatePost')
@section('content')

    <div class="container mt-5">

        <form action="{{ route('posts.update', ['post' => $array->id]) }}" method="POST">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp"
                    value="{{ $array->title }}">

            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="Desc" id="floatingTextarea2"
                        style="height: 100px">{{ $array->Desc }}</textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>
            </div>

            <div class="mb-3">
                <select class="form-select" name="sel" aria-label="Default select example">

                    @foreach ($users as $user)
                        <option value='{{ $user->id }}' @if ($user->id == $array->user_id) selected @endif>
                            {{ $user->name }}</option>
                    @endforeach


                </select>
            </div>


            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>


@endsection
