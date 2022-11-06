@extends('Layout/Master')
@section('title', 'show')

@section('content')


    <div class="container pt-5">

        <div class="card mb-5">
            <h5 class="card-header">Post Info</h5>
            <div class="card-body">
                <h3 class="card-title">ID: {{ $array->id }}</h3>
                <h5 class="card-title">Title: {{ $array->title }}</h5>
                <p class="card-text">Description: {{ $array->Desc }}</p>

            </div>
        </div>

        <div class="card">
            <h5 class="card-header">Post Creator Info</h5>
            <div class="card-body">        
                <h5 class="card-title">Name:  {{$array->user?$array->user->name:'Not Found User'}} </h5>
                <p class="card-text">Email: {{ $array->Email }} </p>
                <p class="card-text">Created At: {{ $array->created_at }} </p>

            </div>
        </div>

    </div>
@endsection
